<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Project.php';


class EntryRepository extends Repository
{

    public function getProject(string $id): ?Project
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM entries WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project == false) {
            return null;
        }

        return new Project(
            $project['title'],
            $project['content'],
            $project['image'],
        );
    }


    public function addProject(Project $project): void
    {
        
        $stmt = $this->database->connect()->prepare('
            INSERT INTO entries (title, content, id_created_by, image)
            VALUES (?,?,?,?)
        ');

        $createdbyid = 1;
        $stmt->execute([
            $project->getTitle(),
            $project->getDescription(),
            $createdbyid,
            $project->getImage()
        ]);
    }

    public function getProjects(): array {
        $result = [];
    
        $stmt = $this->database->connect()->prepare('SELECT * FROM entries');
        $stmt->execute();
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($projects as $project) {
            $result[] = new Project(
                $project['title'],
                $project['content'],
                $project['image']
            );
        }
    
        return $result;
    }

    public function getProjectByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM entries WHERE LOWER(title) LIKE :search OR LOWER(content) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
