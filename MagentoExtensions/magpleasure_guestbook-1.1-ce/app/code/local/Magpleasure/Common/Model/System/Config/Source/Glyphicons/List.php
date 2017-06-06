<?php
/**
 * Magpleasure Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE-CE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magpleasure.com/LICENSE-CE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento COMMUNITY edition
 * Magpleasure does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Magpleasure does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   Magpleasure
 * @package    Magpleasure_Common
 * @version    0.6.11
 * @copyright  Copyright (c) 2012-2013 Magpleasure Ltd. (http://www.magpleasure.com)
 * @license    http://www.magpleasure.com/LICENSE-CE.txt
 */

/**
 * Abstract Option Model
 */
class Magpleasure_Common_Model_System_Config_Source_Glyphicons_List
    extends Magpleasure_Common_Model_System_Config_Source_Abstract
{
    public function toArray()
    {
        $list = array(
            'glass' => $this->_commonHelper()->__("Glass"),
            'user_add' => $this->_commonHelper()->__("User Add"),
            'heart' => $this->_commonHelper()->__("Heart"),
            'note' => $this->_commonHelper()->__("Note"),
            'parents' => $this->_commonHelper()->__("Parents"),
            'pencil' => $this->_commonHelper()->__("Pencil"),
            'file' => $this->_commonHelper()->__("File"),
            'pie_chart' => $this->_commonHelper()->__("Pie chart"),
            'dislikes' => $this->_commonHelper()->__("Dislikes"),
            'clock' => $this->_commonHelper()->__("Clock"),
            'compass' => $this->_commonHelper()->__("Compass"),
            'tags' => $this->_commonHelper()->__("Tags"),
            'bookmark' => $this->_commonHelper()->__("Bookmark"),
            'warning_sign' => $this->_commonHelper()->__("Warning Sign"),
            'heat' => $this->_commonHelper()->__("Heat"),
            'eyedropper' => $this->_commonHelper()->__("Eyedropper"),
            'vector_path_polygon' => $this->_commonHelper()->__("Vector Path Polygon"),
            'bold' => $this->_commonHelper()->__("Bold"),
            'left_indent' => $this->_commonHelper()->__("Left Indent"),
            'list' => $this->_commonHelper()->__("List"),
            'message_full' => $this->_commonHelper()->__("Message Full"),
            'message_ban' => $this->_commonHelper()->__("Message Ban"),
            'inbox_minus' => $this->_commonHelper()->__("Inbox Minus"),
            'picture' => $this->_commonHelper()->__("Picture"),
            'folder_open' => $this->_commonHelper()->__("Folder Open"),
            'edit' => $this->_commonHelper()->__("Edit"),
            'show_thumbnails' => $this->_commonHelper()->__("Show Thumbnails"),
            'ipad' => $this->_commonHelper()->__("iPad"),
            'ear_plugs' => $this->_commonHelper()->__("Ear Plugs"),
            'pause' => $this->_commonHelper()->__("Pause"),
            'facetime_video' => $this->_commonHelper()->__("Facetime Video"),
            'move' => $this->_commonHelper()->__("Move"),
            'circle_remove' => $this->_commonHelper()->__("Circle Remove"),
            'ok' => $this->_commonHelper()->__("Ok (variant 1)"),
            'unlock' => $this->_commonHelper()->__("Unlock"),
            'left_arrow' => $this->_commonHelper()->__("Left Arrow"),
            'circle_arrow_left' => $this->_commonHelper()->__("Circle Arrow Left"),
            'share' => $this->_commonHelper()->__("Share"),
            'gbp' => $this->_commonHelper()->__("Gbp"),
            'brush' => $this->_commonHelper()->__("Brush"),
            'rotation_lock' => $this->_commonHelper()->__("Rotation Lock"),
            'male' => $this->_commonHelper()->__("Male"),
            'oxygen_bottle' => $this->_commonHelper()->__("Oxygen Bottle"),
            'qrcode' => $this->_commonHelper()->__("QRCode"),
            'vcard' => $this->_commonHelper()->__("VCard"),
            'shield' => $this->_commonHelper()->__("Shield"),
            'cutlery' => $this->_commonHelper()->__("Cutlery"),
            'cardio' => $this->_commonHelper()->__("Cardio"),
            'scissors' => $this->_commonHelper()->__("Scissors"),
            'coffe_cup' => $this->_commonHelper()->__("Coffe Cup"),
            'microphone' => $this->_commonHelper()->__("Microphone"),
            'bicycle' => $this->_commonHelper()->__("Bicycle"),
            'rugby' => $this->_commonHelper()->__("Rugby"),
            'more_items' => $this->_commonHelper()->__("More Items"),
            'tie' => $this->_commonHelper()->__("Tie"),
            'blog' => $this->_commonHelper()->__("Blog"),
            'iphone_shake' => $this->_commonHelper()->__("iPhone Shake"),
            'hdd' => $this->_commonHelper()->__("HDD"),
            'hand_down' => $this->_commonHelper()->__("Hand Down"),
            'vases' => $this->_commonHelper()->__("Vases"),
            'bug' => $this->_commonHelper()->__("Bug"),
            'security_camera' => $this->_commonHelper()->__("Security Camera"),
            'spray' => $this->_commonHelper()->__("Spray"),
            'electrical_socket_eu' => $this->_commonHelper()->__("Electrical Socket EU"),
            'yahoo' => $this->_commonHelper()->__("Yahoo"),
            'instapaper' => $this->_commonHelper()->__("Instapaper"),
            'read_it_later' => $this->_commonHelper()->__("Read it Later"),
            'youtube' => $this->_commonHelper()->__("Youtube"),
            'stumbleupon' => $this->_commonHelper()->__("Stumbleupon"),
            'vimeo' => $this->_commonHelper()->__("Vimeo"),
            'leaf' => $this->_commonHelper()->__("Leaf"),
            'user_remove' => $this->_commonHelper()->__("User Remove"),
            'beach_umbrella' => $this->_commonHelper()->__("Beach Umbrella"),
            'heart_empty' => $this->_commonHelper()->__("Heart Empty"),
            'binoculars' => $this->_commonHelper()->__("Binoculars"),
            'bus' => $this->_commonHelper()->__("Bus"),
            'coins' => $this->_commonHelper()->__("Coins"),
            'group' => $this->_commonHelper()->__("Group"),
            'star' => $this->_commonHelper()->__("Star"),
            'stopwatch' => $this->_commonHelper()->__("Stopwatch"),
            'keynote' => $this->_commonHelper()->__("Keynote"),
            'cleaning' => $this->_commonHelper()->__("Cleaning"),
            'wifi' => $this->_commonHelper()->__("Wi-Fi"),
            'signal' => $this->_commonHelper()->__("Signal"),
            'repeat' => $this->_commonHelper()->__("Repeat"),
            'adjust' => $this->_commonHelper()->__("Adjust"),
            'vector_path_line' => $this->_commonHelper()->__("Vector Path Line"),
            'text_underline' => $this->_commonHelper()->__("Text Underline"),
            'right_indent' => $this->_commonHelper()->__("Right Indent"),
            'text_smaller' => $this->_commonHelper()->__("Text Smaller"),
            'message_empty' => $this->_commonHelper()->__("Message Empty"),
            'message_flag' => $this->_commonHelper()->__("Message Flag"),
            'inbox_lock' => $this->_commonHelper()->__("Inbox Lock"),
            'adjust_alt' => $this->_commonHelper()->__("Adjust Alt"),
            'folder_plus' => $this->_commonHelper()->__("Folder Plus"),
            'new_window' => $this->_commonHelper()->__("New Window"),
            'show_thumbnails_with_lines' => $this->_commonHelper()->__("Show Thumbnails With Lines"),
            'iphone' => $this->_commonHelper()->__("iPhone"),
            'phone' => $this->_commonHelper()->__("Phone"),
            'stop' => $this->_commonHelper()->__("Stop"),
            'download_alt' => $this->_commonHelper()->__("Download Alt"),
            'more' => $this->_commonHelper()->__("More"),
            'circle_ok' => $this->_commonHelper()->__("Circle Ok"),
            'ban' => $this->_commonHelper()->__("Ban"),
            'electricity' => $this->_commonHelper()->__("Electricity"),
            'right_arrow' => $this->_commonHelper()->__("Right Arrow"),
            'circle_arrow_right' => $this->_commonHelper()->__("Circle Arrow Right"),
            'chevron-right' => $this->_commonHelper()->__("Chevron-right"),
            'retweet_2' => $this->_commonHelper()->__("Retweet (variant 2)"),
            'pen' => $this->_commonHelper()->__("Pen"),
            'flash' => $this->_commonHelper()->__("Flash"),
            'female' => $this->_commonHelper()->__("Female"),
            'fins' => $this->_commonHelper()->__("Fins"),
            'barcode' => $this->_commonHelper()->__("Barcode"),
            'electrical_plug' => $this->_commonHelper()->__("Electrical Plug"),
            'ring' => $this->_commonHelper()->__("Ring"),
            'pizza' => $this->_commonHelper()->__("Pizza"),
            't-shirt' => $this->_commonHelper()->__("T-Shirt"),
            'bomb' => $this->_commonHelper()->__("Bomb"),
            'pot' => $this->_commonHelper()->__("Pot"),
            'webcam' => $this->_commonHelper()->__("Webcam"),
            'life_preserver' => $this->_commonHelper()->__("Life Preserver"),
            'ax' => $this->_commonHelper()->__("Ax"),
            'sort' => $this->_commonHelper()->__("Sort"),
            'wallet' => $this->_commonHelper()->__("Wallet"),
            'dashboard' => $this->_commonHelper()->__("Dashboard"),
            'pin_flag' => $this->_commonHelper()->__("Pin Flag"),
            'thumbs_up' => $this->_commonHelper()->__("Thumbs Up"),
            'fullscreen' => $this->_commonHelper()->__("Fullscreen"),
            'bullhorn' => $this->_commonHelper()->__("Bullhorn"),
            'crown' => $this->_commonHelper()->__("Crown"),
            'expand' => $this->_commonHelper()->__("Expand"),
            'nails' => $this->_commonHelper()->__("Nails"),
            'electrical_socket_us' => $this->_commonHelper()->__("Electrical Socket US"),
            'blogger' => $this->_commonHelper()->__("Blogger"),
            'evernote' => $this->_commonHelper()->__("Evernote"),
            'linked_in' => $this->_commonHelper()->__("Linked In"),
            'skitch' => $this->_commonHelper()->__("Skitch"),
            'readability' => $this->_commonHelper()->__("Readability"),
            'flickr' => $this->_commonHelper()->__("Flickr"),
            'dog' => $this->_commonHelper()->__("Dog"),
            'film' => $this->_commonHelper()->__("Film"),
            'train' => $this->_commonHelper()->__("Train"),
            'home' => $this->_commonHelper()->__("Home"),
            'road' => $this->_commonHelper()->__("Road"),
            'wifi_alt' => $this->_commonHelper()->__("WiFi Alt"),
            'airplane' => $this->_commonHelper()->__("Airplane"),
            'keys' => $this->_commonHelper()->__("Keys"),
            'link' => $this->_commonHelper()->__("Link"),
            'projector' => $this->_commonHelper()->__("Projector"),
            'paperclip' => $this->_commonHelper()->__("Paperclip"),
            'ruller' => $this->_commonHelper()->__("Ruller"),
            'cup' => $this->_commonHelper()->__("Cup"),
            'retweet' => $this->_commonHelper()->__("Retweet (variant 1)"),
            'display' => $this->_commonHelper()->__("Display"),
            'tint' => $this->_commonHelper()->__("Tint"),
            'vector_path_curve' => $this->_commonHelper()->__("Vector Path Curve"),
            'text_strike' => $this->_commonHelper()->__("Text Strike"),
            'align_left' => $this->_commonHelper()->__("Align Left"),
            'text_bigger' => $this->_commonHelper()->__("Text bigger"),
            'message_in' => $this->_commonHelper()->__("Message In"),
            'message_lock' => $this->_commonHelper()->__("Message Lock"),
            'inbox_in' => $this->_commonHelper()->__("Inbox In"),
            'database_lock' => $this->_commonHelper()->__("Database Lock"),
            'folder_minus' => $this->_commonHelper()->__("Folder Minus"),
            'check' => $this->_commonHelper()->__("Check"),
            'show_lines' => $this->_commonHelper()->__("Show Lines"),
            'iphone_transfer' => $this->_commonHelper()->__("iPhone Transfer"),
            'step_backward' => $this->_commonHelper()->__("Step Backward"),
            'forward' => $this->_commonHelper()->__("Forward"),
            'mute' => $this->_commonHelper()->__("Mute"),
            'brightness_reduce' => $this->_commonHelper()->__("Brightness Reduce"),
            'circle_question_mark' => $this->_commonHelper()->__("Circle Question Mark"),
            'download' => $this->_commonHelper()->__("Download"),
            'ok_2' => $this->_commonHelper()->__("Ok (variant 2)"),
            'down_arrow' => $this->_commonHelper()->__("Down Arrow"),
            'circle_arrow_top' => $this->_commonHelper()->__("Circle Arrow Top"),
            'chevron-left' => $this->_commonHelper()->__("Chevron-right"),
            'moon' => $this->_commonHelper()->__("Moon"),
            'zoom_in' => $this->_commonHelper()->__("Zoom In"),
            'google_maps' => $this->_commonHelper()->__("Google Maps"),
            'asterisk' => $this->_commonHelper()->__("Asterisk"),
            'fishes' => $this->_commonHelper()->__("Fishes"),
            'pool' => $this->_commonHelper()->__("Pool"),
            'flag' => $this->_commonHelper()->__("Flag"),
            'cake' => $this->_commonHelper()->__("Cake"),
            'birthday_cake' => $this->_commonHelper()->__("Birthday Cake"),
            'pants' => $this->_commonHelper()->__("Pants"),
            'skull' => $this->_commonHelper()->__("Skull"),
            'grater' => $this->_commonHelper()->__("Grater"),
            'temple_christianity_church' => $this->_commonHelper()->__("Temple Christianity Church"),
            'share_alt' => $this->_commonHelper()->__("Share Alt"),
            'table_tennis' => $this->_commonHelper()->__("Table Tennis"),
            'filter' => $this->_commonHelper()->__("Filter"),
            'piano' => $this->_commonHelper()->__("Piano"),
            'certificate' => $this->_commonHelper()->__("Certificate"),
            'turtle' => $this->_commonHelper()->__("Turtle"),
            'thumbs_down' => $this->_commonHelper()->__("Thumbs Down"),
            'shopping_bag' => $this->_commonHelper()->__("Shopping Bag"),
            'dumbbell' => $this->_commonHelper()->__("Dumbbell"),
            'smoking' => $this->_commonHelper()->__("Smoking"),
            'collapse' => $this->_commonHelper()->__("Collapse"),
            'claw_hammer' => $this->_commonHelper()->__("Claw Hammer"),
            'pinterest' => $this->_commonHelper()->__("Pinterest"),
            'picasa' => $this->_commonHelper()->__("Picasa"),
            'xing' => $this->_commonHelper()->__("Xing"),
            'forrst' => $this->_commonHelper()->__("Forrst"),
            'foursquare' => $this->_commonHelper()->__("Foursquare"),
            'facebook' => $this->_commonHelper()->__("Facebook"),
            'last_fm' => $this->_commonHelper()->__("Last FM"),
            'user' => $this->_commonHelper()->__("User"),
            'magic' => $this->_commonHelper()->__("Magic"),
            'print' => $this->_commonHelper()->__("Print"),
            'snowflake' => $this->_commonHelper()->__("Showflake"),
            'search' => $this->_commonHelper()->__("Search"),
            'luggage' => $this->_commonHelper()->__("Luggage"),
            'notes' => $this->_commonHelper()->__("Notes (variant 1)"),
            'calendar' => $this->_commonHelper()->__("Calendar"),
            'eye_open' => $this->_commonHelper()->__("Eye Open"),
            'history' => $this->_commonHelper()->__("History"),
            'power' => $this->_commonHelper()->__("Power"),
            'gift' => $this->_commonHelper()->__("Gift"),
            'stroller' => $this->_commonHelper()->__("Stroller"),
            'refresh' => $this->_commonHelper()->__("Refresh"),
            'log_book' => $this->_commonHelper()->__("Log Book"),
            'crop' => $this->_commonHelper()->__("Crop"),
            'vector_path_all' => $this->_commonHelper()->__("Vector Path All"),
            'text_height' => $this->_commonHelper()->__("Text Height"),
            'align_center' => $this->_commonHelper()->__("Align Center"),
            'embed' => $this->_commonHelper()->__("Embed"),
            'message_out' => $this->_commonHelper()->__("Message out"),
            'message_new' => $this->_commonHelper()->__("Message new"),
            'inbox_out' => $this->_commonHelper()->__("Inbox Out"),
            'database_plus' => $this->_commonHelper()->__("Database Plus"),
            'folder_lock' => $this->_commonHelper()->__("Folder Lock"),
            'unchecked' => $this->_commonHelper()->__("Unchecked"),
            'playlist' => $this->_commonHelper()->__("Playlist"),
            'iphone_exchange' => $this->_commonHelper()->__("iPhone Exchange"),
            'fast_backward' => $this->_commonHelper()->__("Fast Backward"),
            'fast_forward' => $this->_commonHelper()->__("Fast Forward"),
            'volume_down' => $this->_commonHelper()->__("Volume Down"),
            'brightness_increase' => $this->_commonHelper()->__("Brightness Increase"),
            'circle_info' => $this->_commonHelper()->__("Circle Info"),
            'upload' => $this->_commonHelper()->__("Upload"),
            'remove_2' => $this->_commonHelper()->__("Remove (variant 2)"),
            'up_arrow' => $this->_commonHelper()->__("Up Arrow"),
            'circle_arrow_down' => $this->_commonHelper()->__("Circle Arrow Down"),
            'bluetooth' => $this->_commonHelper()->__("Bluetooth"),
            'sun' => $this->_commonHelper()->__("Sun"),
            'zoom_out' => $this->_commonHelper()->__("Zoom Out"),
            'anchor' => $this->_commonHelper()->__("Anchor"),
            'divide' => $this->_commonHelper()->__("Divide"),
            'boat' => $this->_commonHelper()->__("Boat"),
            'buoy' => $this->_commonHelper()->__("Buoy"),
            'credit_card' => $this->_commonHelper()->__("Credit Card"),
            'drink' => $this->_commonHelper()->__("Drink"),
            'tablet' => $this->_commonHelper()->__("Tablet"),
            'sweater' => $this->_commonHelper()->__("Sweater"),
            'celebration' => $this->_commonHelper()->__("Celebration"),
            'kettle' => $this->_commonHelper()->__("Kettle"),
            'temple_islam' => $this->_commonHelper()->__("Temple Islam"),
            'comments' => $this->_commonHelper()->__("Comments"),
            'bowling' => $this->_commonHelper()->__("Bowling"),
            'gamepad' => $this->_commonHelper()->__("Gamepad"),
            'sampler' => $this->_commonHelper()->__("Sampler"),
            'bell' => $this->_commonHelper()->__("Bell"),
            'rabbit' => $this->_commonHelper()->__("Rabbit"),
            'hand_right' => $this->_commonHelper()->__("Hand Right"),
            'book_open' => $this->_commonHelper()->__("Book Open"),
            'suitcase' => $this->_commonHelper()->__("Suitcase"),
            'cloud-upload' => $this->_commonHelper()->__("Cloud-Upload"),
            'collapse_top' => $this->_commonHelper()->__("Collapse Top"),
            'classic_hammer' => $this->_commonHelper()->__("Classic Hammer"),
            'dropbox' => $this->_commonHelper()->__("Dropbox"),
            'amazon' => $this->_commonHelper()->__("Amazon"),
            'zootool' => $this->_commonHelper()->__("Zootool"),
            'pinboard' => $this->_commonHelper()->__("Pinboard"),
            'quora' => $this->_commonHelper()->__("Quora"),
            'twitter' => $this->_commonHelper()->__("Twitter"),
            'rss' => $this->_commonHelper()->__("RSS"),
            'girl' => $this->_commonHelper()->__("Girl"),
            'envelope' => $this->_commonHelper()->__("Envelope"),
            'bin' => $this->_commonHelper()->__("Bin"),
            'fire' => $this->_commonHelper()->__("Fire"),
            'cars' => $this->_commonHelper()->__("Cars"),
            'old_man' => $this->_commonHelper()->__("Old Man"),
            'stats' => $this->_commonHelper()->__("Stats"),
            'router' => $this->_commonHelper()->__("Router"),
            'eye_close' => $this->_commonHelper()->__("Eye Close"),
            'truck' => $this->_commonHelper()->__("Truck"),
            'lightbulb' => $this->_commonHelper()->__("Lightbulb"),
            'umbrella' => $this->_commonHelper()->__("Umbrella"),
            'headphones' => $this->_commonHelper()->__("Headphones"),
            'roundabout' => $this->_commonHelper()->__("Roundabout"),
            'adress_book' => $this->_commonHelper()->__("Address Book"),
            'vector_path_square' => $this->_commonHelper()->__("Vector Path Square"),
            'font' => $this->_commonHelper()->__("Font"),
            'text_width' => $this->_commonHelper()->__("Text Width"),
            'align_right' => $this->_commonHelper()->__("Align Right"),
            'embed_close' => $this->_commonHelper()->__("Embed Close"),
            'message_plus' => $this->_commonHelper()->__("Message Plus"),
            'inbox' => $this->_commonHelper()->__("Inbox"),
            'cogwheel' => $this->_commonHelper()->__("Cogwheel"),
            'database_minus' => $this->_commonHelper()->__("Database Minus"),
            'folder_flag' => $this->_commonHelper()->__("Folder Flag"),
            'more_windows' => $this->_commonHelper()->__("More Windows"),
            'imac' => $this->_commonHelper()->__("iMac"),
            'ipod' => $this->_commonHelper()->__("iPod"),
            'rewind' => $this->_commonHelper()->__("Rewind"),
            'step_forward' => $this->_commonHelper()->__("Step Forward"),
            'volume_up' => $this->_commonHelper()->__("Volume Up"),
            'circle_plus' => $this->_commonHelper()->__("Circle Plus"),
            'circle_exclamation_mark' => $this->_commonHelper()->__("Circle Exclamation Mark"),
            'shopping_cart' => $this->_commonHelper()->__("Shopping Cart"),
            'cart_out' => $this->_commonHelper()->__("Cart Out"),
            'resize_small' => $this->_commonHelper()->__("Resize Small"),
            'play_button' => $this->_commonHelper()->__("Play Button"),
            'euro' => $this->_commonHelper()->__("EURO"),
            'cloud' => $this->_commonHelper()->__("Cloud"),
            'pin' => $this->_commonHelper()->__("Pin"),
            'conversation' => $this->_commonHelper()->__("Conversation"),
            'snorkel_diving' => $this->_commonHelper()->__("Snorkel Diving"),
            'delete' => $this->_commonHelper()->__("Delete"),
            'spade' => $this->_commonHelper()->__("Spade"),
            'keyboard-wireless' => $this->_commonHelper()->__("Keyboard-Wireless"),
            'beer' => $this->_commonHelper()->__("Beer"),
            'settings' => $this->_commonHelper()->__("Settings"),
            'fabric' => $this->_commonHelper()->__("Fabric"),
            'tea_kettle' => $this->_commonHelper()->__("Tea Kettle"),
            'hospital' => $this->_commonHelper()->__("Hospital"),
            'temple_hindu' => $this->_commonHelper()->__("Temple"),
            'flower' => $this->_commonHelper()->__("Flower"),
            'tree_conifer' => $this->_commonHelper()->__("Tree Conifer"),
            'playing_dices' => $this->_commonHelper()->__("Playing Dices"),
            'podium' => $this->_commonHelper()->__("Podium"),
            'candle' => $this->_commonHelper()->__("Candle"),
            'globe' => $this->_commonHelper()->__("Globe"),
            'hand_left' => $this->_commonHelper()->__("Hand Left"),
            'nameplate' => $this->_commonHelper()->__("Nameplate"),
            'file_import' => $this->_commonHelper()->__("File import"),
            'cloud-download' => $this->_commonHelper()->__("Cloud-Download"),
            'globe_af' => $this->_commonHelper()->__("Globe AF"),
            'hand_saw' => $this->_commonHelper()->__("Hand Saw"),
            'google_plus' => $this->_commonHelper()->__("Google Plus"),
            'tumblr' => $this->_commonHelper()->__("Tumblr"),
            'dribbble' => $this->_commonHelper()->__("Dribbble"),
            'behance' => $this->_commonHelper()->__("Behance"),
            'badoo' => $this->_commonHelper()->__("Badoo"),
            'instagram' => $this->_commonHelper()->__("Instragram"),
            'skype' => $this->_commonHelper()->__("Skype"),
            'car' => $this->_commonHelper()->__("Car"),
            'camera' => $this->_commonHelper()->__("Camera"),
            'music' => $this->_commonHelper()->__("Music"),
            'magnet' => $this->_commonHelper()->__("Magnet"),
            'notes_2' => $this->_commonHelper()->__("Notes (variant 2)"),
            'woman' => $this->_commonHelper()->__("Woman"),
            'charts' => $this->_commonHelper()->__("Charts"),
            'camera_small' => $this->_commonHelper()->__("Camera Small"),
            'alarm' => $this->_commonHelper()->__("Alarm"),
            'cargo' => $this->_commonHelper()->__("Cargo"),
            'tag' => $this->_commonHelper()->__("Tag"),
            'book' => $this->_commonHelper()->__("Book"),
            'headset' => $this->_commonHelper()->__("Headset"),
            'random' => $this->_commonHelper()->__("Random"),
            'building' => $this->_commonHelper()->__("Building"),
            'vector_path_circle' => $this->_commonHelper()->__("Vector Path Circle"),
            'italic' => $this->_commonHelper()->__("Italic"),
            'text_resize' => $this->_commonHelper()->__("Text Resize"),
            'justify' => $this->_commonHelper()->__("Justify"),
            'table' => $this->_commonHelper()->__("Table"),
            'message_minus' => $this->_commonHelper()->__("Message Minus"),
            'inbox_plus' => $this->_commonHelper()->__("Inbox Plus"),
            'cogwheels' => $this->_commonHelper()->__("Cogwheels"),
            'database_ban' => $this->_commonHelper()->__("Database Ban"),
            'folder_new' => $this->_commonHelper()->__("Folder New"),
            'show_big_thumbnails' => $this->_commonHelper()->__("Show Big Thumbnails"),
            'macbook' => $this->_commonHelper()->__("MacBook"),
            'ipod_shuffle' => $this->_commonHelper()->__("iPod Shuffle"),
            'play' => $this->_commonHelper()->__("Play"),
            'eject' => $this->_commonHelper()->__("Eject"),
            'screenshot' => $this->_commonHelper()->__("Screenshot"),
            'circle_minus' => $this->_commonHelper()->__("Circle Minus"),
            'remove' => $this->_commonHelper()->__("Remove (variant 1"),
            'lock' => $this->_commonHelper()->__("Lock"),
            'cart_in' => $this->_commonHelper()->__("Cart In"),
            'resize_full' => $this->_commonHelper()->__("Resize Full"),
            'unshare' => $this->_commonHelper()->__("Unshare"),
            'usd' => $this->_commonHelper()->__("USD"),
            'direction' => $this->_commonHelper()->__("Direction"),
            'albums' => $this->_commonHelper()->__("Albums"),
            'chat' => $this->_commonHelper()->__("Chat"),
            'scuba_diving' => $this->_commonHelper()->__("Scuba Diving"),
            'sheriffs_star' => $this->_commonHelper()->__("Sheriffs Star"),
            'bank' => $this->_commonHelper()->__("Bank"),
            'keyboard-wired' => $this->_commonHelper()->__("Keyboard-Wired"),
            'fast_food' => $this->_commonHelper()->__("Fast Food"),
            'bullets' => $this->_commonHelper()->__("Bullets"),
            'leather' => $this->_commonHelper()->__("Leather"),
            'french_press' => $this->_commonHelper()->__("French Press"),
            'hospital_h' => $this->_commonHelper()->__("Hospital Sign"),
            'temple_buddhist' => $this->_commonHelper()->__("Temple Buddhist"),
            'baseball' => $this->_commonHelper()->__("Baseball"),
            'tree_deciduous' => $this->_commonHelper()->__("Tree Deciduous"),
            'calculator' => $this->_commonHelper()->__("Calculator"),
            'soccer_ball' => $this->_commonHelper()->__("Soccer Ball"),
            'pushpin' => $this->_commonHelper()->__("Pushpin"),
            'briefcase' => $this->_commonHelper()->__("Briefcase"),
            'hand_up' => $this->_commonHelper()->__("Hand Up"),
            'nameplate_alt' => $this->_commonHelper()->__("Nameplate alt"),
            'file_export' => $this->_commonHelper()->__("File Export"),
            'restart' => $this->_commonHelper()->__("Restart"),
            'global' => $this->_commonHelper()->__("Global"),
            'riflescope' => $this->_commonHelper()->__("Riflescope"),
            'jolicloud' => $this->_commonHelper()->__("Jolicloud"),
            'wordpress' => $this->_commonHelper()->__("WordPress"),
            'deviantart' => $this->_commonHelper()->__("DeviantArt"),
            'github' => $this->_commonHelper()->__("GitHub"),
            'spotify' => $this->_commonHelper()->__("Spotify"),
            'posterous_spaces' => $this->_commonHelper()->__("Posterous Spaces"),
            'e-mail' => $this->_commonHelper()->__("E-Mail"),


        );

        asort($list);

        $empty = array(''=> $this->_commonHelper()->__("None"));
        return array_merge($empty, $list);
    }

}