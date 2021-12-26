<?php

	openlog('webthumbnailer-start', LOG_PID | LOG_PERROR, LOG_LOCAL0);

	syslog(LOG_INFO, 'Starting webthumbnailer...');
	syslog(LOG_INFO, 'Finished starting webthumbnailer.');

	closelog();

?>