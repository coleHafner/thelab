#!/usr/bin/php -q
<?php

$skip_session = true;
//require_once('../docroot/config.php');

$path = 'data/';
$user_info = array();
$fp = fopen($path . 'mpd_users-to-import.csv', 'r');
$fp_output = fopen($path . 'output.txt', 'w');

while(!feof($fp)) {
    $line = fgets($fp);

    if($line && strlen(trim($line)) > 0 && $counter > 0) {

        $line_arr = explode('^', $line);
        $name_arr = !empty($line_arr[2]) ? explode(' ', $line_arr[2]) : array();
        $first_name = !empty($name_arr[0]) ? $name_arr[0] : null;

        $last_name = !empty($name_arr[1]) ? $name_arr[1] : null;
        $email = !empty($line_arr[3]) ? $line_arr[3] : null;

        $name_constraint = ($first_name && $last_name) ? true : false;
        $email_constraint = $email ? true : false;

        if($name_constraint || $email_constraint) {
            $c = new Criteria;

            if($name_constraint && $email_constraint) {
                $c1 = $c->getNewCriterion(UserPeer::EMAIL, $email);
                $c2 = $c->getNewCriterion(UserPeer::FIRSTNAME, $first_name);
                $c3 = $c->getNewCriterion(UserPeer::LASTNAME, $last_name);

                $c2->addAnd($c3);
                $c1->addOr($c1);

                $c->add($c1);
                $c->add($c2);

            }else if($name_constraint) {
                $c->add(UserPeer::FIRSTNAME, $first_name);
                $c->add(UserPeer::LASTNAME, $last_name);

            }else if($email) {
                $c->addOr(UserPeer::EMAIL, $email);
            }

            $results = UserPeer::doSelect($c);
            $user = array_shift($results);

        }//if we had any data to query on

        //write result to file
        $output = $line;

        if(!empty($user)) {
            $domain_user = $user->getDomainUser();
            $output .= 'yes^' . $user->getType();
        }else {
            $output .= '^no';
        }

        $output .= "\n";
        fwrite($fp_output, $output);
    }

    ++$counter;
}