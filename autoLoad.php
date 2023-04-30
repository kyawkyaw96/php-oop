<?php
spl_autoload_register(fn($className)=>require_once __DIR__."/class/$className.php");
