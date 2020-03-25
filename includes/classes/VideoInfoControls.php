<?php

require_once("includes/classes/ButtonProvider.php");

class VideoInfoControls {

    private $con, $video, $userLoggedInObj;

    public function __construct($video, $userLoggedInObj) {
        $this->video = $video;
        $this->userLoogedInObj = $userLoggedInObj;
    }

    public function create() {

        $likeButton = $this->createLikeButton();
        $dislikeButton = $this->createDislikeButton();

        return "<div class= 'controls'>
                $likeButton
                $dislikeButton
                </div>";
    }

    private function createLikeButton() {
        $text = $this->video->getLikes();
        $videoId = $this->video->getId();
        $action = "likeVideo(this, $videoId)";
        $class = "likeButton";

        $imageSrc = "assets/images/icons/thumb-up.png";

        //change button img if video has been liked already

        return ButtonProvider::createButton($text,$imageSrc,$action,$class);
    }

    private function createDislikeButton() {
        return "<button>Dislike</button>";
    }

    
}
?>
