<!DOCTYPE html>
<html>
<head>
    <title>Fundamentals and Components</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #f3e5f5; /* Soft purple background */
            color: #4a148c; /* Deep purple text */
        }
        h2 {
            color: #4a148c; /* Deep purple color */
        }
        .btn {
            background-color: #7b1fa2; /* Medium purple button background */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #4a148c; /* Darker purple on hover */
        }
        .section {
            margin: 20px 0;
            text-align: left;
        }
        .section-title {
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            background-color: #7b1fa2; /* Medium purple background */
            color: white;
            border-radius: 5px;
        }
        .section-content {
            display: none;
            margin-top: 10px;
            padding: 10px;
            background-color: #e1bee7; /* Lighter purple background */
            color: #4a148c; /* Deep purple text */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
    </style>
    <script>
        function toggleSection(sectionId) {
            var content = document.getElementById(sectionId);
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }
    </script>
</head>
<body>

<h2>Fundamentals and Components</h2>
<p>Welcome to the Fundamentals and Components section. Learn about the basic elements and tools used in various mystical and magical practices.</p>

<div class="section">
    <div class="section-title" onclick="toggleSection('candles')">Candles</div>
    <div class="section-content" id="candles">
        <p><strong>Green</strong>: Growth, Money, Success, Earth Energy, Prosperity Attraction, Health, Expansion.</p>
        <p><strong>Blue</strong>: Communication, Forgiveness, Focus, Good Fortune, Peace, Wisdom, Remembering Dreams.</p>
        <p><strong>Orange</strong>: Intellect, Networking, Legal Affairs, Joy, Stimulating Energy, Attraction, Justice, Celebration.</p>
        <p><strong>Yellow</strong>: Intelligence, focus, learning, break mental blocks, wisdom, confidence, clarity, new ideas, logic.</p>
        <p><strong>Gold</strong>: Prosperity, wealth, personal power, success, enlightenment, manifestation/male energy.</p>
        <p><strong>White</strong>: Purity, new beginnings, protection, truth, peace, harmony, calming the mind.</p>
        <p><strong>Red</strong>: Passion, stamina, confidence, will power, increase creative energy, courage.</p>
        <p><strong>Pink</strong>: Unconditional love, romance, friendship, self-love, happiness, forgiveness, reconciliation, intimacy.</p>
        <p><strong>Purple</strong>: Heighten intuition, meditation, wisdom, divination, deepening spiritual wisdom and knowledge.</p>
    </div>
</div>

<div class="section">
    <div class="section-title" onclick="toggleSection('herbs')">Herbs</div>
    <div class="section-content" id="herbs">
        <p><strong>Rose</strong>: Associated with love, psychic powers, healing, love divination, and attracting good fortune.</p>
        <p><strong>Lavender</strong>: Employed for protection, peace, sleep, and attraction.</p>
        <p><strong>Eggshell Powder (Cascarilla)</strong>: Commonly used for protection and purification.</p>
        <p><strong>Mugwort</strong>: Carries properties of strength, psychic powers, and prophetic dreams.</p>
        <p><strong>Cinnamon</strong>: Used for spirituality, success, healing, power, psychic powers, and lust.</p>
        <p><strong>Sage</strong>: Believed to aid in fertility, immortality, healing, health, protection, wisdom, and wishes.</p>
        <p><strong>Frankincense</strong>: Often used for protection, exorcism, and enhancing spirituality.</p>
        <p><strong>Chamomile Flower</strong>: Linked to money, sleep, love, and purification.</p>
        <p><strong>Fennel</strong>: Known for protection, healing, money, and purification.</p>
        <p><strong>Lemongrass</strong>: Associated with repelling snakes, lust, and enhancing psychic powers.</p>
    </div>
</div>

<div class="section">
    <div class="section-title" onclick="toggleSection('moonPhases')">Moon Phases</div>
    <div class="section-content" id="moonPhases">
        <p><strong>New Moon</strong>: Symbolizes new beginnings, setting intentions, and personal development. It's a period for self-reflection and letting go of what no longer serves you.</p>
        <p><strong>Waxing Crescent</strong>: Represents growth and planning. It's a time to organize and take actionable steps towards goals.</p>
        <p><strong>First Quarter</strong>: Marks a time for action and decision-making, overcoming obstacles, and demonstrating courage.</p>
        <p><strong>Waxing Gibbous</strong>: Indicates the final stages of growth, a period for refinement, and aligning with one's higher self.</p>
        <p><strong>Full Moon</strong>: The most potent phase for abundance, manifestation, and realizing desires. It's a time to celebrate achievements and release limitations.</p>
        <p><strong>Waning Gibbous</strong>: A phase for harvest, gratitude, and letting go, preparing for the new that the next cycle brings.</p>
        <p><strong>Last Quarter</strong>: Represents releasing, surrendering, and emotional healing. It's a time for clarity and purpose.</p>
        <p><strong>Waning Crescent</strong>: The final phase for rest, reflection, and preparation for the new cycle, reflecting on achievements and planning ahead.</p>
    </div>
</div>

<a href="main.php" class="btn">Back to Main</a>

</body>
</html>