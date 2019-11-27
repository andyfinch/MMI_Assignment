<?php

class Topic
{
    protected $Conn;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function createTopic($topic_data)
    {
        
        $user_id = $_SESSION['user_data']['id'];
        $parent_id = $topic_data['parent_id'];

        $this->Conn->beginTransaction();
        $query = "INSERT INTO topics (title, description,level,parent_id, user_id) VALUES (:title, :description,:level, :parent_id, :user_id)";
        $stmt = $this->Conn->prepare($query);
        $result  =$stmt->execute(array(
            'title' => $topic_data['title'],
            'description' => $topic_data['description'],
            'level' => $topic_data['level'],
            'parent_id' => $parent_id,
            'user_id' => $user_id,
        ));

        $result = $this->insertContent($this->Conn->lastInsertId(), $topic_data['content']);


        $this->Conn->commit();

        return $result;

    }

    public function editTopic($topic_data)
    {

        $user_id = $_SESSION['user_data']['id'];

        $this->Conn->beginTransaction();
        $query = "UPDATE topics set title=:title, description=:description where id = :id and user_id = :user_id";
        $stmt = $this->Conn->prepare($query);

        $stmt->execute(array(
            'id' => $topic_data['id'],
            'title' => $topic_data['title'],
            'description' => $topic_data['description'],
            'user_id' => $user_id
        ));

        $query = "UPDATE contents set content=:content where topic_id = :id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
            'id' => $topic_data['id'],
            'content' => $topic_data['content']
        ));
        $this->Conn->commit();

        return $stmt;
    }

    public function deleteTopic($topic_data)
    {
        
        $user_id = $_SESSION['user_data']['id'];
        //$query = "DELETE from topics where id = :id and user_id = :user_id and path like concat( (select path from topics st where st.id = :id),'%')";
        $query = "SELECT @path := path FROM topics WHERE id=:id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
            'id' => $topic_data['id'],
        ));
        $query = "delete from topics where (id = :id and user_id = :user_id) or path like concat(@path, '%')";
        $stmt = $this->Conn->prepare($query);
        return $stmt->execute(array(
            'id' => $topic_data['id'],
            'user_id' => $user_id
        ));


    }

    public function insertContent($topicID, $content)
    {
        $query = "INSERT INTO contents (content, topic_id) VALUES (:content, :topic_id);";
        $stmt = $this->Conn->prepare($query);

        $result = $stmt->execute(array(
            'content' =>$content,
            'topic_id' => $topicID
        ));

        $contentID = $this->Conn->lastInsertId();

        if ($_FILES['fileToUpload']['name'][0] != '')
        {
            $image = new Image($this->Conn);

            $uploadResponse = $image->uploadImage($_FILES);

            if ($uploadResponse['success'] == true) {


                $fileCount = count($uploadResponse['filesAdded']);

                for ($i = 0; $i < $fileCount; $i++) {

                    $fileAdded = 'uploads/' . $uploadResponse['filesAdded'][$i];

                    $query = "INSERT INTO contentmedia (content_id, url, type) VALUES (:content_id, :fileAdded, 1)";
                    $stmt = $this->Conn->prepare($query);

                    $result = $stmt->execute(array(
                        'fileAdded' => $fileAdded,
                        'content_id' => $contentID

                    ));
                }


            }
        }
        if (($_POST['video'][0]) != '') 
        {
            for ($i = 0; $i < count($_POST['video']); $i++) {
                $query = "INSERT INTO contentmedia (content_id, url, type) VALUES (:content_id, :url, 2)";
                $stmt = $this->Conn->prepare($query);

                $result = $stmt->execute(array(
                    'url' => $_POST['video'][$i],
                    'content_id' => $contentID

                ));

            }

        }

        return $result;
    }

    public function editContent($contentID, $content)
    {
        $query = "UPDATE contents set content = :content where id = :id;";
        $stmt = $this->Conn->prepare($query);

        $result = $stmt->execute(array(
            'content' => $content,
            'id' => $contentID
        ));

        //$contentID = $this->Conn->lastInsertId();

        if ($_FILES['fileToUpload']['name'][0] != '') {
            $image = new Image($this->Conn);

            $uploadResponse = $image->uploadImage($_FILES);

            if ($uploadResponse['success'] == true) {


                $fileCount = count($uploadResponse['filesAdded']);

                for ($i = 0; $i < $fileCount; $i++) {

                    $fileAdded = 'uploads/' . $uploadResponse['filesAdded'][$i];

                    $query = "INSERT INTO contentmedia (content_id, url, type) VALUES (:content_id, :fileAdded, 1)";
                    $stmt = $this->Conn->prepare($query);

                    $result = $stmt->execute(array(
                        'fileAdded' => $fileAdded,
                        'content_id' => $contentID

                    ));
                }


            }
        }
       
        if (($_POST['video'][0]) != '') {
            for ($i = 0; $i < count($_POST['video']); $i++) {
                $query = "INSERT INTO contentmedia (content_id, url, type) VALUES (:content_id, :url, 2)";
                $stmt = $this->Conn->prepare($query);

                $result = $stmt->execute(array(
                    'url' => $_POST['video'][$i],
                    'content_id' => $contentID

                ));

            }

        }
       

        return $result;
    }

    public function deleteContent($content_id)
    {

        $user_id = $_SESSION['user_data']['id'];

        $query = "DELETE c
                    FROM contents c
                    INNER JOIN topics on topics.id = c.topic_id
                    WHERE c.id = :id and topics.user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        return $stmt->execute(array(
            'id' => $content_id,
            'user_id' => $user_id
        ));


    }

    /*DELETE FROM topics
WHERE id = 1 and user_id = 1 and path like (
    SELECT path FROM (
        select concat( (select path from topics st where st.id = 1),'%')
    ) AS t
)*/

    public function getTopics()
    {
        $user_id = $_SESSION['user_data']['id'];
        $query = "SELECT *,
                   (
               CASE WHEN EXISTS(SELECT id FROM topics t2 WHERE t2.parent_id=t1.id)
                  THEN 'Y' 
                  ELSE 'N'
               END 
              )AS has_child 
       FROM topics t1 where t1.user_id = :user_id order by path";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(':user_id' => $user_id));
        return $result = $stmt->fetchAll();
    }

    public function getTopic($id)
    {
        $user_id = $_SESSION['user_data']['id'];

        if ( $id == 0)
        {
            $query = "select  t.* from topics t                 
                    where user_id = :user_id                   
                    order by path, :id";
        }
        else{
            $query = "select  t.* from topics t                  
                    where   path like concat( (select path from topics st where st.id = :id),'%') and user_id = :user_id                   
                    order by path";
        }

        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
                ':user_id' => $user_id,
                ':id' => $id)
        );
        return $result = $stmt->fetchAll();
    }

    public function getContents($topic_id)
    {
        //$user_id = $_SESSION['user_data']['id'];
        $query = "select  * from contents                     
                    where topic_id = :topic_id                      
                    order by id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
                ':topic_id' => $topic_id
        ));
        return $result = $stmt->fetchAll();
    }

    public function getMediaUrls($contentID, $type)
    {
        $user_id = $_SESSION['user_data']['id'];
        $query = "select  cm.* from contentMedia cm 
                    INNER JOIN contents c on c.id = cm.content_id
                    INNER JOIN topics t on t.id = c.topic_id
                    where user_id = :user_id  
                    and cm.content_id = :content_id
                    and cm.type = :type
                    order by id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
                ':user_id' => $user_id,
                ':type' => $type,
                ':content_id' => $contentID)
        );
        return $result = $stmt->fetchAll();
    }

}
     /*select  *
from    (select * from topics t1
         order by parent_id, id) topics_sorted,
        (select @pv := '1') initialisation
where   find_in_set(parent_id, @pv)
and     length(@pv := concat(@pv, ',', id))
order by concat(parent_path, id)*/

/*select  *
from    (select * from topics t1
         order by parent_id, id) topics_sorted,
        (select @pv := '1') initialisation
where   (find_in_set(parent_id, @pv) or id = @pv) and user_id = 1
and     length(@pv := concat(@pv, ',', id))
order by concat(parent_path, id)*/
?>
