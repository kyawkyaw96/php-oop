<?php


trait FrontEndField
{
    public $FrontEndDesignSkill = "figma";
    public $FrontEndDevelopmentSkill = ["html", "css", "js", "api"];
    public function prototypeOnFigma()
    {
        return "Frontend designer can create on figma";
    }
    public function frontendDevelopment()
    {
        return "Develope webside with " . join(",", $this->FrontEndDevelopmentSkill);
    }
}

trait BackendField
{
    public $systemDesign = "Understanding the requirment of system";
    public $databaseSkill = "mysql";
    public $backendLanguage = ["node", "php"];
}

trait DeploymentField
{
    public $shareHosting = "cPanel";
    public $cloud = "AWS";
}

class FullstepDeveloper{
    use FrontEndField,BackendField,DeploymentField;
}

$me= new FullstepDeveloper;
print_r($me);
