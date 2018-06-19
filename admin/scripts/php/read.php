<?php
header('Content-Type: audio/wav');
readfile("../../../../../uploads/".$_GET['audio']);
