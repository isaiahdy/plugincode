<?php
/**
* Plugin Name: R-Class Calculator
* Description: A plugin that creates a multi-step form and sends an email.
* Version: 4.5
* Author: Isaiah
* Author URI: positive.net.au
**/

function multistep_form() {
    $content = '';
    $content .= '<form id="multistep_form">';

    $content .= '<div id="step1">'; 

    $content .= '<span id="title1">Please enter your contact information</span>';
    $content .= '<div class="name-container">';
    $content .= '<input type="text" id="fname" placeholder="First Name">';
    $content .= '<input type="text" id="lname" placeholder="Last Name">';
    $content .= '</div>';
    $content .= '<div class="clientname-contain">';
    $content .= '<input type="text" id="clientname" placeholder="Client Name">';
    $content .= '<input type="text" id="projectname" placeholder="Project Name">';
    $content .= '</div>';
    $content .= '<input type="email" id="email" placeholder="Email">';
    $content .= '<input type="text" id="phone" placeholder="Phone Number">'; 
    $content .= '<button type="button" id="next">Next</button>';
    $content .= '</div>';
    
    $content .= '<div id="step2" style="display: none;">';

    $content .= '<span id="title2">Please enter your client address</span>'; 
    $content .= '<input type="text" id="address" placeholder="Address">';
    $content .= '<div class="suburb-container">';
    $content .= '<input type="text" id="suburb" placeholder="Suburb">';
    $content .= '<input type="number" id="postcode" placeholder="Postcode">';
    $content .= '</div>';
    $content .= '<div class="state-container">';
    $content .= '<input type="text" id="state" placeholder="State">'; 
    $content .= '<input type="text" id="country" placeholder="Country">'; 
    $content .= '</div>';
    $content .= '<div class="button-container1">';
    $content .= '<button type="button" id="prev" style="float: left;">Previous</button>';
    $content .= '<button type="button" id="next2">Next</button>';
    $content .= '</div>';

    $content .= '</div>';

    $content .= '<div id="step3" style="display: none;">';

    $content .= '<span id="title3">Kitchen & Laundry Appliances</span>'; 
    $content .= '<p>Please select all relevant appliances before pressing next</p>';
    $content .= '<button type="button" id="fridgeBtn">Fridge</button>';
    $content .= '<button type="button" id="freezerBtn">Freezer</button>';
    $content .= '<button type="button" id="toasterBtn">Toaster</button>';
    $content .= '<button type="button" id="blenderBtn">Blender</button>';
    $content .= '<button type="button" id="coffeeBtn">Coffee Machine</button>';
    $content .= '<button type="button" id="dishwasherBtn">Dishwasher</button>';
    $content .= '<button type="button" id="foodprocessorBtn">Food Processor</button>';
    $content .= '<button type="button" id="microwaveBtn">Microwave</button>';
    $content .= '<button type="button" id="ovenBtn">Oven</button>';
    $content .= '<button type="button" id="slowcookerBtn">Slow Cooker</button>';
    $content .= '<button type="button" id="electricstoveBtn">Electric Stove</button>';
    $content .= '<button type="button" id="kettleBtn">Kettle</button>';
    $content .= '<button type="button" id="airfryerBtn">Air Fryer</button>';
    $content .= '<button type="button" id="washerBtn">Washing Machine</button>';
    $content .= '<button type="button" id="dryerBtn">Dryer</button>';
    $content .= '<button type="button" id="ironBtn">Iron</button>';
    $content .= '<button type="button" id="clothesBtn">Clothes Steamer</button>';


    $content .= '<table id="Kitchentable">';
    $content .= '<thead>';
    $content .= '<tr>';
    $content .= '<th>Appliance</th>';
    $content .= '<th>Qty</th>';
    $content .= '<th>Power (W)</th>';
    $content .= '<th>Usage per day (hours)</th>';
    $content .= '<th>kWh per day</th>';
    $content .= '<th>Remove</th>';
    $content .= '</tr>';
    $content .= '</thead>';
    $content .= '<tbody id="Kappliances">';
    $content .= '</tbody>';
    $content .= '</table>';

    $content .= '<div class="button-container2">';
    $content .= '<button type="button" id="prev2" style="float: left;">Previous</button>';
    $content .= '<button type="button" id="next3">Next</button>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div id="step4" style="display: none;">';

    $content .= '<span id="title5">Living & Office Appliances</span>';
    $content .= '<p>Please select all relevant appliances before pressing next</p>';
    $content .= '<button type="button" id="smlacBtn">Small Split-Cycle Aircon</button>';
    $content .= '<button type="button" id="lrgacBtn">Large Split-Cycle Aircon</button>';
    $content .= '<button type="button" id="televisionBtn">Television</button>';
    $content .= '<button type="button" id="dvdBtn">DVD player</button>';
    $content .= '<button type="button" id="streamingBtn">Streaming device</button>';
    $content .= '<button type="button" id="speakersBtn">Sound system/speakers</button>';
    $content .= '<button type="button" id="consoleBtn">Gaming console</button>';
    $content .= '<button type="button" id="desktopBtn">Desktop computer</button>';
    $content .= '<button type="button" id="laptopBtn">Laptop computer</button>';
    $content .= '<button type="button" id="printerBtn">Printer</button>';
    $content .= '<button type="button" id="wirelessspeakerBtn">Wireless speakers</button>';
    $content .= '<button type="button" id="spaBtn">Spa</button>';
    $content .= '<button type="button" id="lightBtn">Lights(LED)</button>';
    $content .= '<button type="button" id="lighthaloBtn">Lights(Halogen)</button>';
    $content .= '<button type="button" id="fanBtn">Fan</button>';


    $content .= '<table id="livingtable">';
    $content .= '<thead>';
    $content .= '<tr>';
    $content .= '<th>Appliance</th>';
    $content .= '<th>Qty</th>';
    $content .= '<th>Power (W)</th>';
    $content .= '<th>Usage per day (hours)</th>';
    $content .= '<th>kWh per day</th>';
    $content .= '<th>Remove</th>';
    $content .= '</tr>';
    $content .= '</thead>';
    $content .= '<tbody id="Oappliances">';
    $content .= '</tbody>';
    $content .= '</table>';

    $content .= '<div class="button-container4">';
    $content .= '<button type="button" id="prev3" style="float: left;">Previous</button>';
    $content .= '<button type="button" id="next4">Next</button>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div id="step5" style="display: none;">';

    $content .= '<span id="title6">Services & Workshop</span>';
    $content .= '<p>Please select all relevant appliances before pressing next</p>';
    $content .= '<button type="button" id="waterBtn">Water Heater (electric) </button>';
    $content .= '<button type="button" id="poolpumpBtn">Pool pump</button>';
    $content .= '<button type="button" id="waterpumpBtn">Water pump</button>';
    $content .= '<button type="button" id="borepumpBtn">Bore pump</button>';
    $content .= '<button type="button" id="reticBtn">Retic pump</button>';
    $content .= '<button type="button" id="rechargeBtn">Rechargeable power tools</button>';
    $content .= '<button type="button" id="welderBtn">Welder</button>';
    $content .= '<button type="button" id="homebrewBtn">Heated home brew</button>';
    $content .= '<button type="button" id="latheBtn">Lathe/Milling Machine</button>';
    $content .= '<button type="button" id="woodworkBtn">Woodwork Machinery</button>';
    $content .= '<button type="button" id="hoistBtn">Hoist</button>';
    $content .= '<button type="button" id="minerBtn">Bitcoin Miner</button>';
    $content .= '<button type="button" id="customBtn">Custom</button>';

    $content .= '<div class="telco-container">';
    $content .= '<div class="subheading-container">';
    $content .= '<span id="subheading1">--> Telecommunications</span>';
    $content .= '</div>';
    $content .= '<button type="button" id="delserBtn">Dell Server</button>';
    $content .= '<button type="button" id="kymetaBtn">Kymeta Hawk</button>';
    $content .= '<button type="button" id="ptpBtn">Point to Point</button>';
    $content .= '<button type="button" id="repeaterBtn">Cel-Fi Repeater</button>';
    $content .= '<button type="button" id="cctvBtn">CCTV</button>';
    $content .= '<button type="button" id="cctvptzBtn">CCTV - PTZ</button>';
    $content .= '<button type="button" id="harencBtn">Harvest Encoder</button>';
    $content .= '<button type="button" id="airfiBtn">AirFibre Antenna</button>';
    $content .= '<button type="button" id="sectorBtn">120 degree 5G Sector</button>';
    $content .= '<button type="button" id="yagiBtn">Yagi Antenna</button>';
    $content .= '<button type="button" id="smlethBtn">Small Ethernet Switch</button>';
    $content .= '<button type="button" id="lrgethBtn">Large Ethernet Switch</button>';
    $content .= '<button type="button" id="dvrBtn">DVR</button>';
    $content .= '<button type="button" id="wapBtn">WiFi Access Point</button>';
    $content .= '<button type="button" id="starlinkBtn">Starlink</button>';
    $content .= '<button type="button" id="modemBtn">Router or modem</button>';
    $content .= '<button type="button" id="leoBtn">LEO</button>';
    $content .= '</div>';

    $content .= '<table id="servicetable">';
    $content .= '<thead>';
    $content .= '<tr>';
    $content .= '<th>Appliance</th>';
    $content .= '<th>Qty</th>';
    $content .= '<th>Power (W)</th>';
    $content .= '<th>Usage per day (hours)</th>';
    $content .= '<th>kWh per day</th>';
    $content .= '<th>Remove</th>';
    $content .= '</tr>';
    $content .= '</thead>';
    $content .= '<tbody id="Sappliances">';
    $content .= '</tbody>';
    $content .= '</table>';

    $content .= '<div class="button-container5">';
    $content .= '<button type="button" id="prev4" style="float: left;">Previous</button>';
    $content .= '<button type="button" id="next5">Next</button>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div id="step6" style="display: none;">';

    $content .= '<div class="field-container1">';
    $content .= '<label for="appliances-percentage">Percentage of appliances used at the same time %:</label>';
    $content .= '<input type="number" id="appli" name="appliances-percentage" min="0" max="100" value="50" step="any">';

    $content .= '<label for="reserve-power-days">Number of days reserve power:</label>';
    $content .= '<input type="number" id="reserve" name="reserve-power-days" value="1" step="any">';

    $content .= '<label for="winter-solar-hours">Winter average daily effective solar (hours):</label>';
    $content .= '<input type="number" id="winter" name="winter-solar-hours" value="4" step="any">';

    $content .= '<label for="daytime-power-use">Percentage of daytime power use %:</label>';
    $content .= '<input type="number" id="daytime" name="daytime-power-use" min="0" max="100" step="any" value="50">';

    $content .= '<label for="generator-kVA">Generator (kVA):</label>';
    $content .= '<input type="number" id="generator" name="generator-kVA" placeholder="0">';
    $content .= '<label for="electrical-phase">Electrical Phase:</label>';
    $content .= '<select id="electrical-phase" name="electrical-phase" required>'; // Add 'required' here
    $content .= '<option value="">Select Phase</option>'; // Provide a default option
    $content .= '<option value="single-phase">Single Phase</option>';
    $content .= '<option value="split-phase">Split-Phase</option>';
    $content .= '<option value="three-phase">Three Phase</option>';
    $content .= '</select>';
    $content .= '</div>';

    $content .= '<input type="text" id="message" placeholder="Final Notes">';

    $content .= '<p>Select Base design/Features:</p>';
    $content .= '<div class="checkbox-container">';
    $content .= '<div class="checkbox-column">';
    $content .= '<input type="checkbox" id="pole-base" name="item[]" value="Pole base"> <label for="pole-base">Pole base</label><br>';
    $content .= '<input type="checkbox" id="cabinet" name="item[]" value="Cabinet"> <label for="cabinet">Cabinet</label><br>';
    $content .= '</div>';
    $content .= '<div class="checkbox-column">';
    $content .= '<input type="checkbox" id="skid" name="item[]" value="Skid"> <label for="skid">Skid</label><br>';
    $content .= '<input type="checkbox" id="trailer" name="item[]" value="Trailer"> <label for="trailer">Trailer</label><br>';
    $content .= '</div>';
    $content .= '<div class="checkbox-column">';
    $content .= '<input type="checkbox" id="lighting" name="item[]" value="Lighting"> <label for="lighting">Lighting</label><br>';
    $content .= '<input type="checkbox" id="container" name="item[]" value="Container"> <label for="container">Container</label><br>';
    $content .= '</div>';
    $content .= '<div class="checkbox-column">';
    $content .= '<input type="checkbox" id="telecommunicate1" name="item[]" value="Telecommunications"> <label for="telecommunicate1">Telecomunications</label><br>';
    $content .= '<input type="checkbox" id="mast" name="item[]" value="Mast"> <label for="mast">Mast</label><br>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<table id="summarytable">';
    $content .= '<thead>';
    $content .= '<tr>';
    $content .= '<th>Appliance Type</th>';
    $content .= '<th>Total Load (W)</th>';
    $content .= '<th>Total Usage (kWh)</th>';
    $content .= '</tr>';
    $content .= '</thead>';
    $content .= '<tbody>';
    $content .= '<tr>';
    $content .= '<td>Kitchen & Laundry </td>';

    $content .= '<td id="totalKLoad">Total Kitchen Appliances Load:</td>';
    $content .= '<td id="totalKKWh">Total Kitchen Appliances kWh:</td>';

    $content .= '</tr>';
    $content .= '<tr>';
    $content .= '<td>Living & Office</td>';

    $content .= '<td id="totalOLoad">Total Living & Office Appliances Load:</td>';
    $content .= '<td id="totalOKWh">Total Living & Office Appliances kWh:</td>';

    $content .= '</tr>';
    $content .= '<tr>';
    $content .= '<td>Services & Workshop</td>';

    $content .= '<td id="totalSLoad">Total Services Load:</td>';
    $content .= '<td id="totalSKWh">Total Services kWh:</td>';

    $content .= '</tr>';

    $content .= '<tr class="total-row">';
    $content .= '<td>Total</td>';
    $content .= '<td id="totalLoadDisplay"></td>';
    $content .= '<td id="totalKWhDisplay"></td>';


    $content .= '</tr>';
    $content .= '</tbody>';
    $content .= '</table>';

    $content .= '<div class="button-container7">';
    $content .= '<button type="button" id="prev5" style="float: left;">Previous</button>';
    $content .= '<button type="submit" id="submit">Submit</button>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '</div>';
    $content .= '</form>';

    return $content;
}

add_shortcode('multistepform', 'multistep_form');

function hasRequiredItems($systemItems, $selectedItems) {
    // Check if all selected items are present in the system items
    return count(array_intersect($selectedItems, $systemItems)) === count($selectedItems);
}
print_r($system['items']);
print_r($items);


var_dump($batterycalculation, $invertercalculation, $solarcalculation, $electricalPhase, $items);
$suitableSystems = recommendPowerSystem($batterycalculation, $invertercalculation, $solarcalculation, $electricalPhase, $items);

function recommendPowerSystem($batterycalculation, $invertercalculation, $solarcalculation, $phase, $items) {
    // Single Phase Systems
$singlePhaseSystems = [
    //Cabinet & Pole
    ['phase' => 'single-phase', 'model' => 'Single-phase system cabinet and pole', 'kWhMin' => 0, 'kWhMax' => 10, 'kW' => 5, 'solarInput' => 5, 'items' => ['pole-base', 'cabinet']],
    ['phase' => 'single-phase', 'model' => 'Single-phase system cabinet and pole2', 'kWhMin' => 0, 'kWhMax' => 100, 'kW' => 100, 'solarInput' => 100, 'items' => ['pole-base', 'cabinet']],
    //lighting & cabinet
    ['phase' => 'single-phase', 'model' => 'Single-phase system lighting and pole', 'kWhMin' => 0, 'kWhMax' => 10, 'kW' => 5, 'solarInput' => 5, 'items' => ['lighting', 'cabinet']],
    ['phase' => 'single-phase', 'model' => 'Single-phase system lighting and pole2', 'kWhMin' => 0, 'kWhMax' => 100, 'kW' => 100, 'solarInput' => 100, 'items' => ['lighting', 'cabinet']],

];

// Three Phase Systems
$threePhaseSystems = [
    //Cabinet & Pole
    ['phase' => 'three-phase', 'model' => 'Three-phase system cabinet and pole', 'kWhMin' => 0, 'kWhMax' => 10, 'kW' => 5, 'solarInput' => 5, 'items' => ['pole-base', 'cabinet']],
    ['phase' => 'three-phase', 'model' => 'Three-phase system cabinet and pole2', 'kWhMin' => 10, 'kWhMax' => 100, 'kW' => 100, 'solarInput' => 100, 'items' => ['pole-base', 'cabinet']],
    //lighting & cabinet
    ['phase' => 'three-phase', 'model' => 'Three-phase system lighting and pole', 'kWhMin' => 0, 'kWhMax' => 10, 'kW' => 5, 'solarInput' => 5, 'items' => ['lighting', 'cabinet']],
    ['phase' => 'three-phase', 'model' => 'Three-phase system lighting and pole', 'kWhMin' => 0, 'kWhMax' => 100, 'kW' => 100, 'solarInput' => 100, 'items' => ['lighting', 'cabinet2']],

];

// Split Phase Systems
$splitPhaseSystems = [
    ['phase' => 'split-phase', 'model' => 'U-Class', 'kWhMin' => 0, 'kWhMax' => 200, 'kW' => 200, 'solarInput' => 200, 'items' => ['mast', 'lighting']],
    ['phase' => 'split-phase', 'model' => 'C/G-Class', 'kWhMin' => 0, 'kWhMax' => 1000, 'kW' => 1000, 'solarInput' => 1000],
];

    // Based on the phase selected, set the system array to the correct type
    switch ($phase) {
    case 'single-phase':
        $systems = $singlePhaseSystems;
        break;
    case 'three-phase':
        $systems = $threePhaseSystems;
        break;
    case 'split-phase':
        $systems = $splitPhaseSystems;
        break;
    default:
        throw new Exception("Invalid phase type.");
}
    // Initialize the suitable systems as an empty array
    $suitableSystems = [];

    // Go through each system in the systems array
    // Go through each system in the systems array
    foreach ($systems as $system) {
        var_dump($system);
        $systemItems = $system['items'];
        $selectedItems = $items;

        // Check if the current system has the right phase
        if ($system['phase'] === $phase) {
            // Check if the current system has all the selected items
            if (hasRequiredItems($system['items'], $items)) {
                // Check if the current system is within the calculated ranges
                if ($batterycalculation >= $system['kWhMin'] && $batterycalculation <= $system['kWhMax'] &&
                    $invertercalculation <= $system['kW'] && $solarcalculation <= $system['solarInput']) {
                    $suitableSystems[] = $system['model'];
                }
            }
        }
    }
    return $suitableSystems;
}


function submit_form() {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $items = $_POST['items'];
    $items_list = implode(", ", $items);
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $clientname = $_POST['clientname'];
    $projectname = $_POST['projectname'];
    $address = $_POST['address'];
    $suburb = $_POST['suburb'];
    $postcode = $_POST['postcode'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $appli = $_POST['appli'];
    $reserve = $_POST['reserve'];
    $winter = $_POST['winter'];
    $daytime = $_POST['daytime'];
    $generator = $_POST['generator'];
    $electricalPhase = $_POST['electricalPhase'];
    $totalKLoad = round($_POST['totalKLoad'], 2);
    $totalKKWh = round($_POST['totalKKWh'], 2);
    $totalOLoad = round($_POST['totalOLoad'], 2);
    $totalOKWh = round($_POST['totalOKWh'], 2);
    $totalSLoad = round($_POST['totalSLoad'], 2);
    $totalSKWh = round($_POST['totalSKWh'], 2);
    $totalLoad = round($_POST['totalLoad'], 2);
    $totalKWh = round($_POST['totalKWh'], 2);

    $batterycalculation = round(($totalKWh / 0.97) * (1 - ($daytime / 100)) * ($reserve / 0.8), 2);
    $invertercalculation = round(($totalLoad * $appli / 1000 / 100) / 0.9, 2);
    $solarcalculation = round(($totalKWh / 0.97 / $winter / 0.94), 2);

    $appliances = json_decode(stripslashes($_POST['appliances']), true);
    $livingAppliances = json_decode(stripslashes($_POST['livingAppliances']), true);
    $serviceAppliances = json_decode(stripslashes($_POST['serviceAppliances']), true);

    $subject = $projectname . " - " . $clientname . " Client Analysis";

    $body = '<table style="border-collapse: collapse; width: 100%;">';
    $body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Basic Information:</h2>";
    $body .= '<tr style="background-color: #f68b33; color: white; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">';
    $body .= '<th style="border: 1px solid black; padding: 10px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px; width: 30%;">Parameter</th>';
    $body .= '<th style="border: 1px solid black; padding: 10px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Input</th>';
    $body .= '</tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Project Name</td><td style="border: 1px solid black; padding: 10px;">' . $projectname . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Client Name</td><td style="border: 1px solid black; padding: 10px;">' . $clientname . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">First Name</td><td style="border: 1px solid black; padding: 10px;">' . $fname . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Last Name</td><td style="border: 1px solid black; padding: 10px;">' . $lname . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Email</td><td style="border: 1px solid black; padding: 10px;">' . $email . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Phone</td><td style="border: 1px solid black; padding: 10px;">' . $phone . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Address</td><td style="border: 1px solid black; padding: 10px;">' . $address . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Suburb</td><td style="border: 1px solid black; padding: 10px;">' . $suburb . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%;  font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Postcode</td><td style="border: 1px solid black; padding: 10px;">' . $postcode . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">State</td><td style="border: 1px solid black; padding: 10px;">' . $state . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Country</td><td style="border: 1px solid black; padding: 10px;">' . $country . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Percentage of appliances used at the same time %</td><td style="border: 1px solid black; padding: 10px;">' . $appli . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Number of days reserve power</td><td style="border: 1px solid black; padding: 10px;">' . $reserve . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Winter average daily effective solar</td><td style="border: 1px solid black; padding: 10px;">' . $winter . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Percentage of day time power use</td><td style="border: 1px solid black; padding: 10px;">' . $daytime . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Generator (kVA)</td><td style="border: 1px solid black; padding: 10px;">' . $generator . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Electrical Phase</td><td style="border: 1px solid black; padding: 10px;">' . $electricalPhase . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Final Notes</td><td style="border: 1px solid black; padding: 10px;">' . $message . '</td></tr>';
    $body .= '<tr><td style="border: 1px solid black; padding: 10px; width: 30%; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Base Design/Features</td><td style="border: 1px solid black; padding: 10px;">' . $items_list . '</td></tr>';
    $body .= '</table>';


    $body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Kitchen & Laundry Appliances:</h2>";
    $body .= "<table id='totalstable' style='width: 100%; border-collapse: collapse;'><thead><tr><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Appliance Type</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Qty</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Power (W)</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Usage per day (hours)</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black;'>kWh per day</th></tr></thead><tbody>";
    foreach($appliances as $appliance) {
        $body .= "<tr><td style='border: 1px solid black; padding: 10px'>" . $appliance['name'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['qty'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['power'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['usage'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['kWh'] . "</td></tr>";
    }
    $body .= "</tbody></table>";

    $body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Living & Office Appliances:</h2>";
    $body .= "<table id='livingtable' style='width: 100%; border-collapse: collapse;'><thead><tr><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Appliance Type</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Qty</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Power (W)</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Usage per day (hours)</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black;'>kWh per day</th></tr></thead><tbody>";

    foreach($livingAppliances as $appliance) {
        $body .= "<tr><td style='border: 1px solid black; padding: 10px'>" . $appliance['name'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['qty'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['power'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['usage'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['kWh'] . "</td></tr>";
        }
        $body .= "</tbody></table>";

    $body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Services & Workshop:</h2>";
    $body .= "<table id='servicetable' style='width: 100%; border-collapse: collapse;'><thead><tr><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Appliance Type</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Qty</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Power (W)</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black; padding: 8px;'>Usage per day (hours)</th><th style='background-color: #f68b33; color: white; font-weight: 400; font-family: Museo, sans-serif; border: 1px solid black;'>kWh per day</th></tr></thead><tbody>";
    foreach($serviceAppliances as $appliance) {
        $body .= "<tr><td style='border: 1px solid black; padding: 10px'>" . $appliance['name'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['qty'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['power'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['usage'] . "</td>";
        $body .= "<td style='border: 1px solid black; padding: 10px'>" . $appliance['kWh'] . "</td></tr>";
    }
    $body .= "</tbody></table>";

$body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Totals:</h2>";
$body .= '<table style="border-collapse: collapse; width: 100%;">';
$body .= '<tr style="background-color: #f68b33; color: white;">';
$body .= '<th style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Type</th>';
$body .= '<th style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Load (W)</th>';
$body .= '<th style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Usage (kWh)</th>';
$body .= '</tr>';

$body .= '<tr style="background-color: white; color: black;">';
$body .= '<td style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Total Kitchen & Laundry Appliances Load:</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalKLoad . '</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalKKWh . '</td>';
$body .= '</tr>';

$body .= '<tr style="background-color: white; color: black;">';
$body .= '<td style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Total Living &amp; Office Appliances Load:</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalOLoad . '</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalOKWh . '</td>';
$body .= '</tr>';

$body .= '<tr style="background-color: white; color: black;">';
$body .= '<td style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Total Services & Workshop Load:</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalSLoad . '</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalSKWh . '</td>';
$body .= '</tr>';

$body .= '<tr style="background-color: #bdbdbd; color: black;">';
$body .= '<td style="border: 1px solid black; padding: 8px; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;">Totals:</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalLoad . '</td>';
$body .= '<td style="border: 1px solid black; padding: 8px;">' . $totalKWh . '</td>';
$body .= '</tr>';
$body .= '</table>';

$body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Final Calculations:</h2>";
$body .= '<table style="width: 100%; border-collapse: collapse; text-align: center; border: 1px solid black;">';
$body .= '<tr>';
$body .= '<th style="background-color: #f68b33; color: white; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px;border: 1px solid black; padding: 10px;">Battery Calculated Value (kWh)</th>';
$body .= '<th style="background-color: #f68b33; color: white; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px; border: 1px solid black; padding: 10px;">Inverter Calculated Value (kW)</th>';
$body .= '<th style="background-color: #f68b33; color: white; border: 1px solid black; padding: 10px;">Solar Calculated Value (kWp)</th>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<td style="background-color: white; color: black; border: 1px solid black; padding: 10px;">' . $batterycalculation . '</td>';
$body .= '<td style="background-color: white; color: black; border: 1px solid black; padding: 10px;">' . $invertercalculation . '</td>';
$body .= '<td style="background-color: white; color: black; border: 1px solid black; padding: 10px;">' . $solarcalculation . '</td>';
$body .= '</tr>';
$body .= '</table>';
// Call the recommendPowerSystem function to get the recommended system
try {
        $suitableSystems = recommendPowerSystem($batterycalculation, $invertercalculation, $solarcalculation, $electricalPhase, $items);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    $body .= "<h2 style='font-family: Museo, sans-serif; font-weight: 500; font-size: 20px;'>Suitable Systems:</h2>";
    $body .= '<table style="width: 100%; border-collapse: collapse; text-align: center; border: 1px solid black;">';
    $body .= '<tr>';
    $body .= '<td style="background-color: #f68b33; color: white; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px; border: 1px solid black; padding: 10px; width: 50%;">Your Recommended System:</td>';
    $body .= '<td style="background-color: white; color: black; font-family: \'Museo\', sans-serif; font-weight: 400; font-size: 15px; border: 1px solid black; padding: 10px;">' . implode(', ', $suitableSystems) . '</td>';

    $body .= '</tr>';
    $body .= '</table>';

  // Set content type to text/html
  add_filter( 'wp_mail_content_type', function( $content_type ) {
    return 'text/html';
  });

    $recipients = array("isaiah@positive.net.au");
    $errors = false;
    foreach ($recipients as $recipient) {
        if (!wp_mail($recipient, $subject, $body)) {
            $errors = true;
        }
    }

    if ($errors) {
        echo 'There was a problem sending some messages.';
    } else {
        echo 'Form submitted successfully.';
    }
    die();
}

function add_my_script_and_styles() {
    $version = '4.92';
    
    // Enqueue JavaScript file
    wp_enqueue_script('my_script', plugins_url('my_script.js', __FILE__), array('jquery'), $version, true);
    wp_localize_script('my_script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    
    // Enqueue CSS file
    wp_enqueue_style( 'my-plugin-styles', plugins_url( 'styles.css', __FILE__ ), array(), $version );
}
add_action('wp_enqueue_scripts', 'add_my_script_and_styles');

add_action('wp_ajax_submit_form', 'submit_form');
add_action('wp_ajax_nopriv_submit_form', 'submit_form');