<?php

// SEE HOOKS FOLDER FOR FONTS REGISTERING/ENQUEUE IN BASE @path "/include/autoload/hook-vc-iconpicker-param.php"
add_filter('vc_iconpicker-type-etline', 'vc_iconpicker_type_adforest_etline');
add_filter('vc_iconpicker-type-etline', 'vc_iconpicker_type_fontawesome');
add_filter('vc_iconpicker-type-classified', 'vc_iconpicker_type_classified');
/* add_filter( 'vc_iconpicker-type-classified', 'vc_iconpicker_type_fontawesome' ); */
if (!function_exists('vc_iconpicker_type_classified')) {

    function vc_iconpicker_type_classified($icons) {
        $et_line = array(
            'Classified Icons' => array(
                array('' => 'No Icon'),
                array('flaticon-android' => 'Android'),
                array('flaticon-animal' => 'Animal'),
                array('flaticon-animal-1' => 'Animal-1'),
                array('flaticon-animal-2' => 'Animal-2'),
                array('flaticon-animal-3' => 'Animal-3'),
                array('flaticon-animals' => 'Animals'),
                array('flaticon-apartment' => 'Apartment'),
                array('flaticon-apple' => 'Apple'),
                array('flaticon-apple-1' => 'Apple-1'),
                array('flaticon-apple-2' => 'Apple-2'),
                array('flaticon-apple-3' => 'Apple-3'),
                array('flaticon-archery' => 'Archery'),
                array('flaticon-arrows' => 'Arrows'),
                array('flaticon-badminton' => 'Badminton'),
                array('flaticon-badminton-1' => 'Badminton-1'),
                array('flaticon-baseball' => 'Baseball'),
                array('flaticon-bed' => 'Bed'),
                array('flaticon-berry' => 'Berry'),
                array('flaticon-black' => 'Black'),
                array('flaticon-blouse' => 'Blouse'),
                array('flaticon-bonnet' => 'Bonnet'),
                array('flaticon-book' => 'Book'),
                array('flaticon-book-1' => 'Book-1'),
                array('flaticon-book-2' => 'Book-2'),
                array('flaticon-bowling' => 'Bowling'),
                array('flaticon-buildings' => 'Buildings'),
                array('flaticon-buildings-1' => 'Buildings-1'),
                array('flaticon-business' => 'Business'),
                array('flaticon-business-deal' => 'Business-deal'),
                array('flaticon-businessman-paper-of-the-application-for-a-job' => 'Businessman-paper-of-the-application-for-a-job'),
                array('flaticon-calendar' => 'Calendar'),
                array('flaticon-calendar-1' => 'Calendar-1'),
                array('flaticon-calendar-2' => 'Calendar-2'),
                array('flaticon-cellphone' => 'Cellphone'),
                array('flaticon-chat' => 'Chat'),
                array('flaticon-check-square' => 'Check-square'),
                array('flaticon-city' => 'City'),
                array('flaticon-cleaning' => 'Cleaning'),
                array('flaticon-cleaning-1' => 'Cleaning-1'),
                array('flaticon-cleaning-2' => 'Cleaning-2'),
                array('flaticon-clothes' => 'Clothes'),
                array('flaticon-clothes-1' => 'Clothes-1'),
                array('flaticon-cogwheel' => 'Cogwheel'),
                array('flaticon-cogwheel-1' => 'Cogwheel-1'),
                array('flaticon-cogwheel-2' => 'Cogwheel-2'),
                array('flaticon-commerce' => 'Commerce'),
                array('flaticon-commerce-1' => 'Commerce-1'),
                array('flaticon-commerce-2' => 'Commerce-2'),
                array('flaticon-communication' => 'Communication'),
                array('flaticon-communication-1' => 'Communication-1'),
                array('flaticon-computer' => 'Computer'),
                array('flaticon-computer-1' => 'Computer-1'),
                array('flaticon-computer-2' => 'Computer-2'),
                array('flaticon-computer-3' => 'Computer-3'),
                array('flaticon-computer-4' => 'Computer-4'),
                array('flaticon-connection' => 'Connection'),
                array('flaticon-construction' => 'Construction'),
                array('flaticon-construction-1' => 'Construction-1'),
                array('flaticon-construction-2' => 'Construction-2'),
                array('flaticon-construction-3' => 'Construction-3'),
                array('flaticon-construction-4' => 'Construction-4'),
                array('flaticon-data' => 'Data'),
                array('flaticon-dialog' => 'Dialog'),
                array('flaticon-dog' => 'Dog'),
                array('flaticon-dog-1' => 'Dog-1'),
                array('flaticon-dog-2' => 'Dog-2'),
                array('flaticon-drink' => 'Drink'),
                array('flaticon-dropbox' => 'Dropbox'),
                array('flaticon-education' => 'Education'),
                array('flaticon-exercise' => 'Exercise'),
                array('flaticon-facebook' => 'Facebook'),
                array('flaticon-fan' => 'Fan'),
                array('flaticon-fashion' => 'Fashion'),
                array('flaticon-fashion-1' => 'Fashion-1'),
                array('flaticon-fashion-2' => 'Fashion-2'),
                array('flaticon-food' => 'Food'),
                array('flaticon-food-1' => 'Food-1'),
                array('flaticon-food-2' => 'Food-2'),
                array('flaticon-football' => 'Football'),
                array('flaticon-for-sale' => 'For-sale'),
                array('flaticon-full-bed' => 'Full-bed'),
                array('flaticon-game' => 'Game'),
                array('flaticon-gas-station' => 'Gas-station'),
                array('flaticon-gps' => 'Gps'),
                array('flaticon-heart' => 'Heart'),
                array('flaticon-heart-1' => 'Heart-1'),
                array('flaticon-home' => 'Home'),
                array('flaticon-home-1' => 'Home-1'),
                array('flaticon-home-2' => 'Home-2'),
                array('flaticon-house' => 'House'),
                array('flaticon-house-1' => 'House-1'),
                array('flaticon-info' => 'Info'),
                array('flaticon-interface' => 'Interface'),
                array('flaticon-interface-1' => 'Interface-1'),
                array('flaticon-interface-2' => 'Interface-2'),
                array('flaticon-interface-3' => 'Interface-3'),
                array('flaticon-internet' => 'Internet'),
                array('flaticon-internet-1' => 'Internet-1'),
                array('flaticon-internet-2' => 'Internet-2'),
                array('flaticon-jacket' => 'Jacket'),
                array('flaticon-jacket-1' => 'Jacket-1'),
                array('flaticon-job-search-symbol-of-a-hand-holding-cv' => 'Job-search-symbol-of-a-hand-holding-cv'),
                array('flaticon-job-search-symbol-of-suitcase-and-curriculum-paper' => 'Job-search-symbol-of-suitcase-and-curriculum-paper'),
                array('flaticon-job-search-symbol-with-suitcase' => 'Job-search-symbol-with-suitcase'),
                array('flaticon-key' => 'Key'),
                array('flaticon-legal-document-with-valid-period' => 'Legal-document-with-valid-period'),
                array('flaticon-letter' => 'Letter'),
                array('flaticon-linkedin' => 'Linkedin'),
                array('flaticon-man' => 'Man'),
                array('flaticon-medical' => 'Medical'),
                array('flaticon-medical-1' => 'Medical-1'),
                array('flaticon-megaphone' => 'Megaphone'),
                array('flaticon-microsoft' => 'Microsoft'),
                array('flaticon-money' => 'Money'),
                array('flaticon-money-1' => 'Money-1'),
                array('flaticon-money-2' => 'Money-2'),
                array('flaticon-money-3' => 'Money-3'),
                array('flaticon-mortgage' => 'Mortgage'),
                array('flaticon-multimedia' => 'Multimedia'),
                array('flaticon-multimedia-1' => 'Multimedia-1'),
                array('flaticon-multimedia-2' => 'Multimedia-2'),
                array('flaticon-music' => 'Music'),
                array('flaticon-music-1' => 'Music-1'),
                array('flaticon-music-2' => 'Music-2'),
                array('flaticon-music-3' => 'Music-3'),
                array('flaticon-music-4' => 'Music-4'),
                array('flaticon-music-5' => 'Music-5'),
                array('flaticon-music-6' => 'Music-6'),
                array('flaticon-music-7' => 'Music-7'),
                array('flaticon-note' => 'Note'),
                array('flaticon-office' => 'Office'),
                array('flaticon-office-1' => 'Office-1'),
                array('flaticon-office-2' => 'Office-2'),
                array('flaticon-online-job-search-symbol' => 'Online-job-search-symbol'),
                array('flaticon-paper' => 'Paper'),
                array('flaticon-people' => 'People'),
                array('flaticon-people-1' => 'People-1'),
                array('flaticon-people-2' => 'People-2'),
                array('flaticon-people-3' => 'People-3'),
                array('flaticon-people-4' => 'People-4'),
                array('flaticon-people-5' => 'People-5'),
                array('flaticon-phone-call' => 'Phone-call'),
                array('flaticon-photo' => 'Photo'),
                array('flaticon-photo-camera' => 'Photo-camera'),
                array('flaticon-ping-pong' => 'Ping-pong'),
                array('flaticon-ping-pong-1' => 'Ping-pong-1'),
                array('flaticon-reading' => 'Reading'),
                array('flaticon-ribbon-badge' => 'Ribbon-badge'),
                array('flaticon-school' => 'School'),
                array('flaticon-science' => 'Science'),
                array('flaticon-search' => 'Search'),
                array('flaticon-shapes' => 'Shapes'),
                array('flaticon-shapes-1' => 'Shapes-1'),
                array('flaticon-shapes-2' => 'Shapes-2'),
                array('flaticon-shirt' => 'Shirt'),
                array('flaticon-shirt-1' => 'Shirt-1'),
                array('flaticon-shorts' => 'Shorts'),
                array('flaticon-signs' => 'Signs'),
                array('flaticon-signs-1' => 'Signs-1'),
                array('flaticon-signs-2' => 'Signs-2'),
                array('flaticon-skype' => 'Skype'),
                array('flaticon-sofa' => 'Sofa'),
                array('flaticon-strength' => 'Strength'),
                array('flaticon-suitcase' => 'Suitcase'),
                array('flaticon-sweatshirt' => 'Sweatshirt'),
                array('flaticon-technology' => 'Technology'),
                array('flaticon-technology-1' => 'Technology-1'),
                array('flaticon-technology-10' => 'Technology-10'),
                array('flaticon-technology-11' => 'Technology-11'),
                array('flaticon-technology-12' => 'Technology-12'),
                array('flaticon-technology-13' => 'Technology-13'),
                array('flaticon-technology-14' => 'Technology-14'),
                array('flaticon-technology-15' => 'Technology-15'),
                array('flaticon-technology-16' => 'Technology-16'),
                array('flaticon-technology-17' => 'Technology-17'),
                array('flaticon-technology-18' => 'Technology-18'),
                array('flaticon-technology-19' => 'Technology-19'),
                array('flaticon-technology-2' => 'Technology-2'),
                array('flaticon-technology-20' => 'Technology-20'),
                array('flaticon-technology-21' => 'Technology-21'),
                array('flaticon-technology-22' => 'Technology-22'),
                array('flaticon-technology-23' => 'Technology-23'),
                array('flaticon-technology-24' => 'Technology-24'),
                array('flaticon-technology-25' => 'Technology-25'),
                array('flaticon-technology-26' => 'Technology-26'),
                array('flaticon-technology-27' => 'Technology-27'),
                array('flaticon-technology-28' => 'Technology-28'),
                array('flaticon-technology-29' => 'Technology-29'),
                array('flaticon-technology-3' => 'Technology-3'),
                array('flaticon-technology-30' => 'Technology-30'),
                array('flaticon-technology-31' => 'Technology-31'),
                array('flaticon-technology-32' => 'Technology-32'),
                array('flaticon-technology-33' => 'Technology-33'),
                array('flaticon-technology-34' => 'Technology-34'),
                array('flaticon-technology-35' => 'Technology-35'),
                array('flaticon-technology-36' => 'Technology-36'),
                array('flaticon-technology-37' => 'Technology-37'),
                array('flaticon-technology-38' => 'Technology-38'),
                array('flaticon-technology-39' => 'Technology-39'),
                array('flaticon-technology-4' => 'Technology-4'),
                array('flaticon-technology-40' => 'Technology-40'),
                array('flaticon-technology-41' => 'Technology-41'),
                array('flaticon-technology-42' => 'Technology-42'),
                array('flaticon-technology-43' => 'Technology-43'),
                array('flaticon-technology-44' => 'Technology-44'),
                array('flaticon-technology-45' => 'Technology-45'),
                array('flaticon-technology-46' => 'Technology-46'),
                array('flaticon-technology-47' => 'Technology-47'),
                array('flaticon-technology-48' => 'Technology-48'),
                array('flaticon-technology-49' => 'Technology-49'),
                array('flaticon-technology-5' => 'Technology-5'),
                array('flaticon-technology-6' => 'Technology-6'),
                array('flaticon-technology-7' => 'Technology-7'),
                array('flaticon-technology-8' => 'Technology-8'),
                array('flaticon-technology-9' => 'Technology-9'),
                array('flaticon-tool' => 'Tool'),
                array('flaticon-tool-1' => 'Tool-1'),
                array('flaticon-tool-2' => 'Tool-2'),
                array('flaticon-tool-3' => 'Tool-3'),
                array('flaticon-transport' => 'Transport'),
                array('flaticon-transport-1' => 'Transport-1'),
                array('flaticon-transport-10' => 'Transport-10'),
                array('flaticon-transport-11' => 'Transport-11'),
                array('flaticon-transport-12' => 'Transport-12'),
                array('flaticon-transport-13' => 'Transport-13'),
                array('flaticon-transport-14' => 'Transport-14'),
                array('flaticon-transport-15' => 'Transport-15'),
                array('flaticon-transport-16' => 'Transport-16'),
                array('flaticon-transport-17' => 'Transport-17'),
                array('flaticon-transport-18' => 'Transport-18'),
                array('flaticon-transport-19' => 'Transport-19'),
                array('flaticon-transport-2' => 'Transport-2'),
                array('flaticon-transport-20' => 'Transport-20'),
                array('flaticon-transport-21' => 'Transport-21'),
                array('flaticon-transport-3' => 'Transport-3'),
                array('flaticon-transport-4' => 'Transport-4'),
                array('flaticon-transport-5' => 'Transport-5'),
                array('flaticon-transport-6' => 'Transport-6'),
                array('flaticon-transport-7' => 'Transport-7'),
                array('flaticon-transport-8' => 'Transport-8'),
                array('flaticon-transport-9' => 'Transport-9'),
                array('flaticon-travel' => 'Travel'),
                array('flaticon-twitter' => 'Twitter'),
                array('flaticon-vehicle' => 'Vehicle'),
                array('flaticon-vintage' => 'Vintage'),
                array('flaticon-vintage-1' => 'Vintage-1'),
                array('flaticon-volleyball' => 'Volleyball'),
                array('flaticon-washing' => 'Washing'),
                array('flaticon-washing-1' => 'Washing-1'),
                array('flaticon-washing-2' => 'Washing-2'),
                array('flaticon-web' => 'Web'),
                array('flaticon-weight' => 'Weight'),
                array('flaticon-woman' => 'Woman'),
                array('flaticon-woman-1' => 'Woman-1'),
                array('flaticon-wrench' => 'Wrench')
            ),
        );

        return array_merge($icons, $et_line);
    }

}

if (!function_exists('vc_iconpicker_type_adforest_etline')) {

    function vc_iconpicker_type_adforest_etline($icons) {
        $et_line = array(
            'Classified Icons' => array(
                array('flaticon-android' => 'Android'),
                array('flaticon-animal' => 'Animal'),
                array('flaticon-animal-1' => 'Animal-1'),
                array('flaticon-animal-2' => 'Animal-2'),
                array('flaticon-animal-3' => 'Animal-3'),
                array('flaticon-animals' => 'Animals'),
                array('flaticon-apartment' => 'Apartment'),
                array('flaticon-apple' => 'Apple'),
                array('flaticon-apple-1' => 'Apple-1'),
                array('flaticon-apple-2' => 'Apple-2'),
                array('flaticon-apple-3' => 'Apple-3'),
                array('flaticon-archery' => 'Archery'),
                array('flaticon-arrows' => 'Arrows'),
                array('flaticon-badminton' => 'Badminton'),
                array('flaticon-badminton-1' => 'Badminton-1'),
                array('flaticon-baseball' => 'Baseball'),
                array('flaticon-bed' => 'Bed'),
                array('flaticon-berry' => 'Berry'),
                array('flaticon-black' => 'Black'),
                array('flaticon-blouse' => 'Blouse'),
                array('flaticon-bonnet' => 'Bonnet'),
                array('flaticon-book' => 'Book'),
                array('flaticon-book-1' => 'Book-1'),
                array('flaticon-book-2' => 'Book-2'),
                array('flaticon-bowling' => 'Bowling'),
                array('flaticon-buildings' => 'Buildings'),
                array('flaticon-buildings-1' => 'Buildings-1'),
                array('flaticon-business' => 'Business'),
                array('flaticon-business-deal' => 'Business-deal'),
                array('flaticon-businessman-paper-of-the-application-for-a-job' => 'Businessman-paper-of-the-application-for-a-job'),
                array('flaticon-calendar' => 'Calendar'),
                array('flaticon-calendar-1' => 'Calendar-1'),
                array('flaticon-calendar-2' => 'Calendar-2'),
                array('flaticon-cellphone' => 'Cellphone'),
                array('flaticon-chat' => 'Chat'),
                array('flaticon-check-square' => 'Check-square'),
                array('flaticon-city' => 'City'),
                array('flaticon-cleaning' => 'Cleaning'),
                array('flaticon-cleaning-1' => 'Cleaning-1'),
                array('flaticon-cleaning-2' => 'Cleaning-2'),
                array('flaticon-clothes' => 'Clothes'),
                array('flaticon-clothes-1' => 'Clothes-1'),
                array('flaticon-cogwheel' => 'Cogwheel'),
                array('flaticon-cogwheel-1' => 'Cogwheel-1'),
                array('flaticon-cogwheel-2' => 'Cogwheel-2'),
                array('flaticon-commerce' => 'Commerce'),
                array('flaticon-commerce-1' => 'Commerce-1'),
                array('flaticon-commerce-2' => 'Commerce-2'),
                array('flaticon-communication' => 'Communication'),
                array('flaticon-communication-1' => 'Communication-1'),
                array('flaticon-computer' => 'Computer'),
                array('flaticon-computer-1' => 'Computer-1'),
                array('flaticon-computer-2' => 'Computer-2'),
                array('flaticon-computer-3' => 'Computer-3'),
                array('flaticon-computer-4' => 'Computer-4'),
                array('flaticon-connection' => 'Connection'),
                array('flaticon-construction' => 'Construction'),
                array('flaticon-construction-1' => 'Construction-1'),
                array('flaticon-construction-2' => 'Construction-2'),
                array('flaticon-construction-3' => 'Construction-3'),
                array('flaticon-construction-4' => 'Construction-4'),
                array('flaticon-data' => 'Data'),
                array('flaticon-dialog' => 'Dialog'),
                array('flaticon-dog' => 'Dog'),
                array('flaticon-dog-1' => 'Dog-1'),
                array('flaticon-dog-2' => 'Dog-2'),
                array('flaticon-drink' => 'Drink'),
                array('flaticon-dropbox' => 'Dropbox'),
                array('flaticon-education' => 'Education'),
                array('flaticon-exercise' => 'Exercise'),
                array('flaticon-facebook' => 'Facebook'),
                array('flaticon-fan' => 'Fan'),
                array('flaticon-fashion' => 'Fashion'),
                array('flaticon-fashion-1' => 'Fashion-1'),
                array('flaticon-fashion-2' => 'Fashion-2'),
                array('flaticon-food' => 'Food'),
                array('flaticon-food-1' => 'Food-1'),
                array('flaticon-food-2' => 'Food-2'),
                array('flaticon-football' => 'Football'),
                array('flaticon-for-sale' => 'For-sale'),
                array('flaticon-full-bed' => 'Full-bed'),
                array('flaticon-game' => 'Game'),
                array('flaticon-gas-station' => 'Gas-station'),
                array('flaticon-gps' => 'Gps'),
                array('flaticon-heart' => 'Heart'),
                array('flaticon-heart-1' => 'Heart-1'),
                array('flaticon-home' => 'Home'),
                array('flaticon-home-1' => 'Home-1'),
                array('flaticon-home-2' => 'Home-2'),
                array('flaticon-house' => 'House'),
                array('flaticon-house-1' => 'House-1'),
                array('flaticon-info' => 'Info'),
                array('flaticon-interface' => 'Interface'),
                array('flaticon-interface-1' => 'Interface-1'),
                array('flaticon-interface-2' => 'Interface-2'),
                array('flaticon-interface-3' => 'Interface-3'),
                array('flaticon-internet' => 'Internet'),
                array('flaticon-internet-1' => 'Internet-1'),
                array('flaticon-internet-2' => 'Internet-2'),
                array('flaticon-jacket' => 'Jacket'),
                array('flaticon-jacket-1' => 'Jacket-1'),
                array('flaticon-job-search-symbol-of-a-hand-holding-cv' => 'Job-search-symbol-of-a-hand-holding-cv'),
                array('flaticon-job-search-symbol-of-suitcase-and-curriculum-paper' => 'Job-search-symbol-of-suitcase-and-curriculum-paper'),
                array('flaticon-job-search-symbol-with-suitcase' => 'Job-search-symbol-with-suitcase'),
                array('flaticon-key' => 'Key'),
                array('flaticon-legal-document-with-valid-period' => 'Legal-document-with-valid-period'),
                array('flaticon-letter' => 'Letter'),
                array('flaticon-linkedin' => 'Linkedin'),
                array('flaticon-man' => 'Man'),
                array('flaticon-medical' => 'Medical'),
                array('flaticon-medical-1' => 'Medical-1'),
                array('flaticon-megaphone' => 'Megaphone'),
                array('flaticon-microsoft' => 'Microsoft'),
                array('flaticon-money' => 'Money'),
                array('flaticon-money-1' => 'Money-1'),
                array('flaticon-money-2' => 'Money-2'),
                array('flaticon-money-3' => 'Money-3'),
                array('flaticon-mortgage' => 'Mortgage'),
                array('flaticon-multimedia' => 'Multimedia'),
                array('flaticon-multimedia-1' => 'Multimedia-1'),
                array('flaticon-multimedia-2' => 'Multimedia-2'),
                array('flaticon-music' => 'Music'),
                array('flaticon-music-1' => 'Music-1'),
                array('flaticon-music-2' => 'Music-2'),
                array('flaticon-music-3' => 'Music-3'),
                array('flaticon-music-4' => 'Music-4'),
                array('flaticon-music-5' => 'Music-5'),
                array('flaticon-music-6' => 'Music-6'),
                array('flaticon-music-7' => 'Music-7'),
                array('flaticon-note' => 'Note'),
                array('flaticon-office' => 'Office'),
                array('flaticon-office-1' => 'Office-1'),
                array('flaticon-office-2' => 'Office-2'),
                array('flaticon-online-job-search-symbol' => 'Online-job-search-symbol'),
                array('flaticon-paper' => 'Paper'),
                array('flaticon-people' => 'People'),
                array('flaticon-people-1' => 'People-1'),
                array('flaticon-people-2' => 'People-2'),
                array('flaticon-people-3' => 'People-3'),
                array('flaticon-people-4' => 'People-4'),
                array('flaticon-people-5' => 'People-5'),
                array('flaticon-phone-call' => 'Phone-call'),
                array('flaticon-photo' => 'Photo'),
                array('flaticon-photo-camera' => 'Photo-camera'),
                array('flaticon-ping-pong' => 'Ping-pong'),
                array('flaticon-ping-pong-1' => 'Ping-pong-1'),
                array('flaticon-reading' => 'Reading'),
                array('flaticon-ribbon-badge' => 'Ribbon-badge'),
                array('flaticon-school' => 'School'),
                array('flaticon-science' => 'Science'),
                array('flaticon-search' => 'Search'),
                array('flaticon-shapes' => 'Shapes'),
                array('flaticon-shapes-1' => 'Shapes-1'),
                array('flaticon-shapes-2' => 'Shapes-2'),
                array('flaticon-shirt' => 'Shirt'),
                array('flaticon-shirt-1' => 'Shirt-1'),
                array('flaticon-shorts' => 'Shorts'),
                array('flaticon-signs' => 'Signs'),
                array('flaticon-signs-1' => 'Signs-1'),
                array('flaticon-signs-2' => 'Signs-2'),
                array('flaticon-skype' => 'Skype'),
                array('flaticon-sofa' => 'Sofa'),
                array('flaticon-strength' => 'Strength'),
                array('flaticon-suitcase' => 'Suitcase'),
                array('flaticon-sweatshirt' => 'Sweatshirt'),
                array('flaticon-technology' => 'Technology'),
                array('flaticon-technology-1' => 'Technology-1'),
                array('flaticon-technology-10' => 'Technology-10'),
                array('flaticon-technology-11' => 'Technology-11'),
                array('flaticon-technology-12' => 'Technology-12'),
                array('flaticon-technology-13' => 'Technology-13'),
                array('flaticon-technology-14' => 'Technology-14'),
                array('flaticon-technology-15' => 'Technology-15'),
                array('flaticon-technology-16' => 'Technology-16'),
                array('flaticon-technology-17' => 'Technology-17'),
                array('flaticon-technology-18' => 'Technology-18'),
                array('flaticon-technology-19' => 'Technology-19'),
                array('flaticon-technology-2' => 'Technology-2'),
                array('flaticon-technology-20' => 'Technology-20'),
                array('flaticon-technology-21' => 'Technology-21'),
                array('flaticon-technology-22' => 'Technology-22'),
                array('flaticon-technology-23' => 'Technology-23'),
                array('flaticon-technology-24' => 'Technology-24'),
                array('flaticon-technology-25' => 'Technology-25'),
                array('flaticon-technology-26' => 'Technology-26'),
                array('flaticon-technology-27' => 'Technology-27'),
                array('flaticon-technology-28' => 'Technology-28'),
                array('flaticon-technology-29' => 'Technology-29'),
                array('flaticon-technology-3' => 'Technology-3'),
                array('flaticon-technology-30' => 'Technology-30'),
                array('flaticon-technology-31' => 'Technology-31'),
                array('flaticon-technology-32' => 'Technology-32'),
                array('flaticon-technology-33' => 'Technology-33'),
                array('flaticon-technology-34' => 'Technology-34'),
                array('flaticon-technology-35' => 'Technology-35'),
                array('flaticon-technology-36' => 'Technology-36'),
                array('flaticon-technology-37' => 'Technology-37'),
                array('flaticon-technology-38' => 'Technology-38'),
                array('flaticon-technology-39' => 'Technology-39'),
                array('flaticon-technology-4' => 'Technology-4'),
                array('flaticon-technology-40' => 'Technology-40'),
                array('flaticon-technology-41' => 'Technology-41'),
                array('flaticon-technology-42' => 'Technology-42'),
                array('flaticon-technology-43' => 'Technology-43'),
                array('flaticon-technology-44' => 'Technology-44'),
                array('flaticon-technology-45' => 'Technology-45'),
                array('flaticon-technology-46' => 'Technology-46'),
                array('flaticon-technology-47' => 'Technology-47'),
                array('flaticon-technology-48' => 'Technology-48'),
                array('flaticon-technology-49' => 'Technology-49'),
                array('flaticon-technology-5' => 'Technology-5'),
                array('flaticon-technology-6' => 'Technology-6'),
                array('flaticon-technology-7' => 'Technology-7'),
                array('flaticon-technology-8' => 'Technology-8'),
                array('flaticon-technology-9' => 'Technology-9'),
                array('flaticon-tool' => 'Tool'),
                array('flaticon-tool-1' => 'Tool-1'),
                array('flaticon-tool-2' => 'Tool-2'),
                array('flaticon-tool-3' => 'Tool-3'),
                array('flaticon-transport' => 'Transport'),
                array('flaticon-transport-1' => 'Transport-1'),
                array('flaticon-transport-10' => 'Transport-10'),
                array('flaticon-transport-11' => 'Transport-11'),
                array('flaticon-transport-12' => 'Transport-12'),
                array('flaticon-transport-13' => 'Transport-13'),
                array('flaticon-transport-14' => 'Transport-14'),
                array('flaticon-transport-15' => 'Transport-15'),
                array('flaticon-transport-16' => 'Transport-16'),
                array('flaticon-transport-17' => 'Transport-17'),
                array('flaticon-transport-18' => 'Transport-18'),
                array('flaticon-transport-19' => 'Transport-19'),
                array('flaticon-transport-2' => 'Transport-2'),
                array('flaticon-transport-20' => 'Transport-20'),
                array('flaticon-transport-21' => 'Transport-21'),
                array('flaticon-transport-3' => 'Transport-3'),
                array('flaticon-transport-4' => 'Transport-4'),
                array('flaticon-transport-5' => 'Transport-5'),
                array('flaticon-transport-6' => 'Transport-6'),
                array('flaticon-transport-7' => 'Transport-7'),
                array('flaticon-transport-8' => 'Transport-8'),
                array('flaticon-transport-9' => 'Transport-9'),
                array('flaticon-travel' => 'Travel'),
                array('flaticon-twitter' => 'Twitter'),
                array('flaticon-vehicle' => 'Vehicle'),
                array('flaticon-vintage' => 'Vintage'),
                array('flaticon-vintage-1' => 'Vintage-1'),
                array('flaticon-volleyball' => 'Volleyball'),
                array('flaticon-washing' => 'Washing'),
                array('flaticon-washing-1' => 'Washing-1'),
                array('flaticon-washing-2' => 'Washing-2'),
                array('flaticon-web' => 'Web'),
                array('flaticon-weight' => 'Weight'),
                array('flaticon-woman' => 'Woman'),
                array('flaticon-woman-1' => 'Woman-1'),
                array('flaticon-wrench' => 'Wrench')
            ),
            'Et Line Icons' => array(
                array('icon-mobile' => 'mobile'),
                array('icon-laptop' => 'laptop'),
                array('icon-desktop' => 'desktop'),
                array('icon-tablet' => 'tablet'),
                array('icon-phone' => 'phone'),
                array('icon-document' => 'document'),
                array('icon-documents' => 'documents'),
                array('icon-search' => 'search'),
                array('icon-clipboard' => 'clipboard'),
                array('icon-newspaper' => 'newspaper'),
                array('icon-notebook' => 'notebook'),
                array('icon-book-open' => 'book-open'),
                array('icon-browser' => 'browser'),
                array('icon-calendar' => 'calendar'),
                array('icon-presentation' => 'presentation'),
                array('icon-picture' => 'picture'),
                array('icon-pictures' => 'pictures'),
                array('icon-video' => 'video'),
                array('icon-camera' => 'camera'),
                array('icon-printer' => 'printer'),
                array('icon-toolbox' => 'toolbox'),
                array('icon-briefcase' => 'briefcase'),
                array('icon-wallet' => 'wallet'),
                array('icon-gift' => 'gift'),
                array('icon-bargraph' => 'bargraph'),
                array('icon-grid' => 'grid'),
                array('icon-expand' => 'expand'),
                array('icon-focus' => 'focus'),
                array('icon-edit' => 'edit'),
                array('icon-adjustments' => 'adjustments'),
                array('icon-ribbon' => 'ribbon'),
                array('icon-hourglass' => 'hourglass'),
                array('icon-lock' => 'lock'),
                array('icon-megaphone' => 'megaphone'),
                array('icon-shield' => 'shield'),
                array('icon-trophy' => 'trophy'),
                array('icon-flag' => 'flag'),
                array('icon-map' => 'map'),
                array('icon-puzzle' => 'puzzle'),
                array('icon-basket' => 'basket'),
                array('icon-envelope' => 'envelope'),
                array('icon-streetsign' => 'streetsign'),
                array('icon-telescope' => 'telescope'),
                array('icon-gears' => 'gears'),
                array('icon-key' => 'key'),
                array('icon-paperclip' => 'paperclip'),
                array('icon-attachment' => 'attachment'),
                array('icon-pricetags' => 'pricetags'),
                array('icon-lightbulb' => 'lightbulb'),
                array('icon-layers' => 'layers'),
                array('icon-pencil' => 'pencil'),
                array('icon-tools' => 'tools'),
                array('icon-tools-2' => 'tools-2'),
                array('icon-scissors' => 'scissors'),
                array('icon-paintbrush' => 'paintbrush'),
                array('icon-magnifying-glass' => 'magnifying-glass'),
                array('icon-circle-compass' => 'circle-compass'),
                array('icon-linegraph' => 'linegraph'),
                array('icon-mic' => 'mic'),
                array('icon-strategy' => 'strategy'),
                array('icon-beaker' => 'beaker'),
                array('icon-caution' => 'caution'),
                array('icon-recycle' => 'recycle'),
                array('icon-anchor' => 'anchor'),
                array('icon-profile-male' => 'profile-male'),
                array('icon-profile-female' => 'profile-female'),
                array('icon-bike' => 'bike'),
                array('icon-wine' => 'wine'),
                array('icon-hotairballoon' => 'hotairballoon'),
                array('icon-glob' => 'glob'),
                array('icon-genius' => 'genius'),
                array('icon-map-pin' => 'map-pin'),
                array('icon-dial' => 'dial'),
                array('icon-chat' => 'chat'),
                array('icon-heart' => 'heart'),
                array('icon-cloud' => 'cloud'),
                array('icon-upload' => 'upload'),
                array('icon-download' => 'download'),
                array('icon-traget' => 'traget'),
                array('icon-hazardous' => 'hazardous'),
                array('icon-piechart' => 'piechart'),
                array('icon-speedometer' => 'speedometer'),
                array('icon-global' => 'global'),
                array('icon-compass' => 'compass'),
                array('icon-lifesaver' => 'lifesaver'),
                array('icon-clock' => 'clock'),
                array('icon-aperture' => 'aperture'),
                array('icon-quote' => 'quote'),
                array('icon-scope' => 'scope'),
                array('icon-alarmclock' => 'alarmclock'),
                array('icon-refresh' => 'refresh'),
                array('icon-happy' => 'happy'),
                array('icon-sad' => 'sad'),
                array('icon-facebook' => 'facebook'),
                array('icon-twitter' => 'twitter'),
                array('icon-googleplus' => 'googleplus'),
                array('icon-rss' => 'rss'),
                array('icon-tumblr' => 'tumblr'),
                array('icon-linkedin' => 'linkedin'),
                array('icon-dribbble' => 'dribbble'),
            ),
        );

        return array_merge($icons, $et_line);
    }

}
add_action('admin_enqueue_scripts', 'adforest_admin_scripts');
if (!function_exists('adforest_admin_scripts')) {

    function adforest_admin_scripts() {
        wp_enqueue_style('etline-icons', trailingslashit(get_template_directory_uri()) . 'css/et-line-fonts.css');
        wp_enqueue_style('flat-icons', trailingslashit(get_template_directory_uri()) . 'css/flaticon.css');
    }

}