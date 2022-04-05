<?php

    if(isset($_POST['estimate'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $contact_method = $_POST['contact-method'];
        $address_one = $_POST['address-one'];
        $address_two = $_POST['address-two'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $appointment = $_POST['appointment'];
        $bedroom =$_POST['bedroom'];
        $bathroom = $_POST['bathroom'];
        $squarefoot = $_POST['square-foot'];
        $stories = $_POST['stories'];
        $pets = $_POST['pets'];
        $pets_ins = $_POST['pets-ins'];
        $services = $_POST['services'];
        $ala = $_POST['ala'];
        $oftenclean = $_POST['cleaners'];
        $onetime = $_POST['onetime'];
        $ongoing = $_POST['ongoing'];
        $gethome = $_POST['gethome'];
        $gethomeother = $_POST['gethomeother'];
        $items = $_POST['items'];
        $notclean = $_POST['notclean'];
        $ins = $_POST['ins'];
        $how = $_POST['how'];
        $pay = $_POST['pay'];
        $msg = 
        "Name = $name\r\n" .
        "Email = $email\r\n" .
        "Phone Number = $number\r\n" . 
        "Contact Method = $contact_method\r\n" . 
        "Address 1 = $address_one\r\n" . 
        "Address 2 = $address_two\r\n" . 
        "City = $city\r\n" . 
        "State = $state\r\n" . 
        "Zip Code = $zip\r\n" . 
        "Appointment for Others = $appointment\r\n" . 
        "Number of Bedrooms = $bedroom\r\n" . 
        "Number of Bathrooms = $bathroom\r\n" . 
        "Square Footage = $squarefoot\r\n" . 
        "Stories = $stories\r\n" . 
        "Pets = $pets\r\n" . 
        "Pets Instructions = $pets_ins\r\n" . 
        "Cleaning Services = $services\r\n" . 
        "À La Carte = $ala\r\n" . 
        "Often Cleaning = $oftenclean\r\n" . 
        "Timing (One Time) = $onetime\r\n" . 
        "Timing (On Going) = $ongoing\r\n" . 
        "How to get in home = $gethome\r\n" . 
        "How To get in home (altenate way) = $gethomeother\r\n" . 
        "Do Not Touch = $items\r\n" . 
        "Do Not Clean = $notclean\r\n" . 
        "Special Instructions = $ins\r\n" . 
        "How You hear About us = $how\r\n" . 
        "How To Pay = $pay\r\n";

        echo $msg;
    }



?>