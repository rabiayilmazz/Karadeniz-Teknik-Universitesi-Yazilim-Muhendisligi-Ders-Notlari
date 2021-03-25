<?php

abstract class Plugin {
    abstract public function setTitle($title);
    abstract public function setContent($content);
    public function show()
    {
        echo '<div class="plugin">
            <h1>' . $this->title . '</h1>
            <p>' . $this->content . '</p>
        </div>';
    }
}

class LastComments extends Plugin {
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}
class SocialMedia extends Plugin {
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}
class Test extends Plugin {
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}

$lastComments = new LastComments;
$lastComments->setTitle('Son Yorumlar');
$lastComments->setContent('son yorumlar burada gözükecek.');

$socialMedia = new SocialMedia;
$socialMedia->setTitle('Sosyal Medya');
$socialMedia->setContent('sosyal medya linkleri burada gözükecek.');

$test = new Test;
$test->setTitle('Test');
$test->setContent('<a href="https://erbilen.net">erbilen.net</a>');

echo $lastComments->show();
echo $socialMedia->show();
echo $test->show();