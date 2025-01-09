<?php
header("Content-Disposition: attachment; filename=\"document.pdf\"");
header("Content-Type: application/pdf");
readfile("sample.pdf");  