echo "New Event in Your Vicinity of Your Interest. Event Name : $2  Link : http://localhost/EventBuzz/EventProfile.php?id=$3" \
		| mailx \
		-s "Event Notification" \
		-S smtp=smtp://students.iiit.ac.in \
		-S smtp-auth=login \
		-S smtp-auth-user=ujjainwala.m@students.iiit.ac.in \
		-S smtp-auth-password=$(cat /var/www/html/EventBuzz/.ldapsecret) \
		-S from="syed.ahmad@students.iiit.ac.in" \
		$1
