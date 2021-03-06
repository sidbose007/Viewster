<?php
class VideoInfoSection {

    private $con, $video, $userLoggedInObj;

    public function __construct($con, $video, $userLoggedInObj) {
        $this->con = $con;
        $this->video = $video;
        $this->userLoggedInObj = $userLoggedInObj;
    }

    public function create() {
        return $this->createPrimaryInfo() . $this->createSecondaryInfo();
    }

    private function createPrimaryInfo() {
        $title = $this->video->getTitle();
        $views = $this->video->getViews();

        return "<div class='videoInfo'>
                    <h1>$title</h1>

                    <div class='bottomSection'>
                        <span class='viewCount'>$views Views</span>
                    </div>
                </div>";
    }

    
    private function createSecondaryInfo() {

    		$description = $this->video->getDescription();
    		$uploadDate = $this->video->getUploadDate();
    		$uploadedBy = $this->video->getUploadedBy();




     	return "<div class='secondaryInfo'>
     			<div class='topRow'>
     			<div class='uploadInfo'>
     			<span class='owner'> 
     				$uploadedBy
     			</span>
     			<span class='date'> 
     				Published on:<br/>$uploadDate
     			</div>
     			</div>
     			</div>";   
    }

}
?>