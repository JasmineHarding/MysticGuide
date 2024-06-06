<!DOCTYPE html>
<html>
<head>
    <title>Exploring Psychic Abilities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #c8e6c9; /* Mint green background */
            color: #388e3c; /* Green text color */
        }
        h2 {
            color: #388e3c; /* Green color for heading */
            font-size: 32px; /* Larger font size */
        }
        h3 {
            color: #388e3c; /* Green color for subheading */
            font-size: 24px; /* Larger font size */
        }
        .btn {
            background-color: #4caf50; /* Medium green button background */
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #388e3c; /* Darker green on hover */
        }
        /* Dropdown button */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 350px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            text-align: left;
            padding: 20px;
        }
        
        /* Links inside the dropdown */
        .dropdown-content p {
            margin: 15px 0;
        }
        
        /* Change color of dropdown links on hover */
        .dropdown-content p:hover {
            background-color: #ddd;
        }
        
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        /* Style dropdown button */
        .dropbtn {
            background-color: #4caf50; /* Medium green button background */
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        /* Change dropdown button color on hover */
        .dropbtn:hover {
            background-color: #388e3c; /* Darker green on hover */
        }

        /* Back to Main button */
        .back-btn {
            background-color:#4caf50; /* Medium green button background */
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #388e3c; /* Darker green on hover */
        }
    </style>
</head>
<body>

<h2>Exploring Psychic Abilities</h2>
<h3>Types of Psychic Abilities</h3>

<?php
// Arrays containing the information for each psychic ability
$psychicAbilities = array(
    "Clairaudience (Clear Hearing)" => array(
        "Explanation" => "The ability to hear voices, sounds, or music not audible to the normal ear, perceived internally, often conveying messages from the spiritual realm.",
        "Recognition" => "Frequent internal voices or sounds, or intuitive spoken messages."
    ),
    "Claircognizance (Clear Knowing)" => array(
        "Explanation" => "Instantly knowing something to be true without logical basis, with knowledge arriving spontaneously.",
        "Recognition" => "Having a persistent sense of 'just knowing' without a clear origin."
    ),
    "Clairpathy (Clear Emotional Feeling)" => array(
        "Explanation" => "The ability to experience others' emotions as one's own, including those of spirits.",
        "Recognition" => "Deep empathy or unexplained emotional experiences."
    ),
    "Clairgustance (Clear Tasting)" => array(
        "Explanation" => "The ability to taste substances psychically without physical ingestion.",
        "Recognition" => "Experiencing unlinked tastes that may convey messages."
    ),
    "Clairsalience (Clear Smelling)" => array(
        "Explanation" => "Smelling odors without a physical source, which may be associated with entities.",
        "Recognition" => "Detecting unexplained fragrances or stenches."
    ),
    "Clairsentience (Clear Feeling)" => array(
        "Explanation" => "Feeling the physical and emotional states of others and receiving messages through sensations.",
        "Recognition" => "Physical sensations providing insights about people or spirits."
    ),
    "Clairtangency (Clear Touching)" => array(
        "Explanation" => "Also known as psychometry, it's receiving information about objects or people by touch.",
        "Recognition" => "Gaining knowledge about something's history through physical contact."
    ),
    "Clairvoyance (Clear Seeing)" => array(
        "Explanation" => "Seeing things invisible to the normal eye, like future visions, spirits, or symbols.",
        "Recognition" => "Experiencing visions, seeing auras, or observing apparitions unseen by others."
    )
);

// Loop through each psychic ability and display it in a dropdown
foreach ($psychicAbilities as $ability => $details) {
    echo "<div class='dropdown'>";
    echo "<button class='dropbtn'>$ability</button>";
    echo "<div class='dropdown-content'>";
    echo "<p><strong>Explanation:</strong> {$details['Explanation']}</p>";
    echo "<p><strong>Recognition:</strong> {$details['Recognition']}</p>";
    echo "</div>";
    echo "</div><br>";
}
?>

<!-- Button to go back to main.php -->
<button class="back-btn" onclick="window.location.href='main.php'">Back to Main</button>

</body>
</html>
