<?php
$result = "";
$type = "";

// Generate Love Advice (Daily Horoscope Style)
function generateAdvice($name, $mood, $situation) {

$adviceList = [

    "Today is a powerful day for emotional clarity. Take a moment to reflect on your feelings, and allow yourself to see things from your partner’s perspective. This insight can bring surprising understanding and calm to your heart.",

    "Communication will strengthen your relationship. Openly expressing your thoughts, fears, or hopes will create a stronger bond and help your partner feel valued and heard. Listen as much as you speak.",

    "Let go of past doubts and open your heart. Yesterday's worries no longer serve you; embracing forgiveness and trust can bring new joy into your love life, helping connections grow deeper and more meaningful.",

    "A romantic surprise may brighten your day. Something unexpected — a note, a gesture, or a kind word — could uplift both you and your partner, reminding you why your relationship is special.",

    "Self-love will attract deeper love into your life. By prioritizing your own emotional well-being and acknowledging your worth, you naturally draw positive energy and affection from those around you.",

    "Patience will bring emotional rewards. Sometimes love requires waiting, listening, and understanding. The care you show today will strengthen your bonds tomorrow.",

    "An honest conversation will create stronger bonds. Sharing your true feelings, even when vulnerable, encourages authenticity and deepens trust, making your connection more resilient and meaningful.",

    "Your heart knows the answer — trust your intuition. When faced with uncertainty, allow your inner voice to guide you. It often leads to decisions that strengthen love and harmony.",

    "Small gestures of affection will mean more than grand words today. A thoughtful touch, a sincere compliment, or a simple act of kindness can have a lasting impact on your relationship.",

    "A moment of vulnerability could deepen your connection. Sharing fears, dreams, or hidden emotions may feel risky, but it can create an unbreakable bond and bring mutual understanding.",

    "Listen more closely; someone important wants to be heard. Giving your partner your full attention and empathy can resolve misunderstandings and make your relationship feel cherished and secure.",

    "Today favors forgiveness and emotional healing. Letting go of resentment or past mistakes will open the door for love to flourish and for both partners to move forward with a lighter heart.",

    "Romance grows when appreciation is expressed openly. Saying 'thank you', noticing efforts, and showing gratitude nurtures intimacy and keeps the emotional connection vibrant.",

    "A thoughtful message could spark beautiful emotions. Reach out with care, express your feelings, or remind someone of your affection — small words can lead to big smiles and deeper love.",

    "Take initiative — love rewards courage. Plan a date, share your feelings, or resolve a lingering issue. Bold, heartfelt actions often create meaningful progress in relationships.",

    "Shared laughter will strengthen your bond today. Humor, playful moments, or recalling joyful memories can enhance intimacy and create positive emotional energy that lasts.",

    "Avoid overthinking; let feelings flow naturally. Trust the rhythm of your emotions and the signals from your heart — sometimes simplicity brings the most meaningful results in love.",

    "Your calm energy will attract positive romantic vibes. By staying composed and grounded, you create a safe and inviting space for your partner, encouraging love to grow effortlessly.",

    "Focus on understanding, not winning the argument. Today, approach disagreements with empathy and patience; prioritizing connection over ego will lead to mutual respect and harmony.",

    "A new romantic opportunity may appear unexpectedly. Stay open to surprises — whether meeting someone new or deepening an existing connection, the universe may present exciting possibilities.",

    "Kindness will transform tension into closeness. Small acts of consideration, compassion, or patience can resolve conflicts and bring warmth back into your relationship.",

    "Revisit a happy memory together to reignite passion. Sharing past moments of joy or love can create nostalgia, spark intimacy, and remind both of you why your connection is special.",

    "Your emotional maturity will impress someone special. Being thoughtful, understanding, and patient today will show the depth of your heart and encourage trust and affection.",

    "Today is perfect for meaningful heart-to-heart talks. Set aside distractions, speak openly, and listen deeply — genuine dialogue can strengthen bonds like nothing else.",

    "Love grows stronger when both partners feel safe. Prioritize emotional security, support, and honesty; this will create a foundation for lasting intimacy and trust.",

    "Express gratitude — it will multiply affection. Acknowledge the little things your partner does, and celebrate the love in your life — appreciation creates positivity and closeness.",

    "Don’t rush love; let it unfold naturally. Patience allows bonds to develop organically, giving both of you time to understand, respect, and nurture your connection.",

    "Emotional honesty will unlock deeper intimacy. Be authentic about your desires, fears, and dreams — honesty fosters closeness and invites your partner to do the same.",

    "Be playful — romance thrives on fun energy. Laugh, tease, or enjoy spontaneous activities together; lighthearted moments can reignite excitement and affection.",

    "Release jealousy and embrace trust. Confidence in yourself and your partner strengthens your bond, allowing love to grow without fear or insecurity.",

    "Today is about emotional balance and harmony. Avoid extremes, stay centered, and practice patience; balanced energy enhances your relationship and emotional well-being.",

    "Your warmth can heal old misunderstandings. Approach conflicts with compassion and kindness — a loving gesture or word today can resolve tension and bring reconciliation.",

    "A spontaneous act of love will create magic. Whether a surprise call, a thoughtful gift, or a heartfelt note, unexpected gestures strengthen intimacy and joy.",

    "Stay open — destiny may surprise you. Be receptive to new experiences, connections, or conversations; openness attracts unexpected love and opportunities.",

    "You deserve the love you are seeking. Believe in your worth, honor your needs, and allow yourself to receive affection freely and fully.",

    "Compromise today will bring long-term happiness. Flexibility, understanding, and giving space for your partner’s needs strengthen the foundation of love.",

    "Take time to appreciate how far your relationship has grown. Reflection and gratitude for shared experiences enhance connection and remind you why you care.",

    "Love favors patience over pressure today. Give your partner and yourself space to breathe; nurturing relationships with calm attention creates stronger bonds.",

    "Speak from the heart — authenticity wins. Genuine communication fosters trust, emotional intimacy, and lasting connection.",

    "Your energy is attracting romantic alignment. Stay positive, confident, and open-hearted; your vibrations may draw the right people closer.",

    "A meaningful compliment could change everything. Thoughtful words recognizing your partner’s qualities deepen love and encourage appreciation.",

    "Trust the process — love is unfolding behind the scenes. Even if things feel uncertain, patience and faith in your journey allow relationships to blossom naturally.",

    "Emotional growth is the theme of your love life today. Reflect, adapt, and embrace lessons learned — personal development strengthens your romantic connections.",

    "Make space for joy, not doubt. Focus on love, laughter, and shared happiness to attract positive energy and deeper connections.",

    "Today is ideal for reconnecting emotionally. Reach out, share thoughts, and spend quality time together to reaffirm bonds and strengthen intimacy.",

    "Passion increases when trust is strong. Confidence, honesty, and reliability create fertile ground for romantic excitement and emotional closeness.",

    "Give love without expecting immediate return. Generosity in affection, care, and support builds lasting bonds and attracts reciprocal love.",

    "Positive thoughts will attract positive romantic outcomes. Approach love with optimism, focus on gratitude, and watch your relationship flourish."
];


    $randomAdvice = $adviceList[array_rand($adviceList)];

    return "$name, since you're feeling $mood — $randomAdvice Remember: $situation matters, so stay true to your heart. 💖";
}

// Compatibility Calculator
function calculateCompatibility($name1, $name2) {

    $score = 0;

    $combined = strtolower($name1 . $name2);

    for ($i = 0; $i < strlen($combined); $i++) {
        $score += ord($combined[$i]);
    }

    $percentage = ($score % 41) + 60; // Between 60% - 100%

    if ($percentage >= 90) {
        $message = "🔥 Soulmate Connection!";
    } elseif ($percentage >= 75) {
        $message = "💞 Strong Romantic Match!";
    } else {
        $message = "✨ Good Potential — Communication is Key!";
    }

    return "$name1 ❤️ $name2 = $percentage%<br>$message";
}

// Handle Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST["type"];

    if ($type == "advice") {
        $name = htmlspecialchars($_POST["name"]);
        $mood = htmlspecialchars($_POST["mood"]);
        $situation = htmlspecialchars($_POST["situation"]);
        $result = generateAdvice($name, $mood, $situation);
    }

    if ($type == "compatibility") {
        $name1 = htmlspecialchars($_POST["name1"]);
        $name2 = htmlspecialchars($_POST["name2"]);
        $result = calculateCompatibility($name1, $name2);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LoveScope - Pure PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            min-height: 100vh;
        }
        .card {
            border-radius: 20px;
        }
    </style>
</head>
<body class="text-white">

<div class="container py-5">
    <h1 class="text-center mb-5">💖 LoveScope</h1>

    <div class="row g-4">

        <!-- Love Advice -->
        <div class="col-md-6">
            <div class="card p-4 text-dark shadow">
                <h4>🌟 Daily Love Advice</h4>
                <form method="POST">
                    <input type="hidden" name="type" value="advice">
                    <input name="name" class="form-control mb-2" placeholder="Your Name" required>
                    <input name="mood" class="form-control mb-2" placeholder="Your Mood" required>
                    <textarea name="situation" class="form-control mb-2" placeholder="Describe your situation" required></textarea>
                    <button class="btn btn-danger w-100">Get Advice</button>
                </form>
            </div>
        </div>

        <!-- Compatibility -->
        <div class="col-md-6">
            <div class="card p-4 text-dark shadow">
                <h4>💞 Compatibility Checker</h4>
                <form method="POST">
                    <input type="hidden" name="type" value="compatibility">
                    <input name="name1" class="form-control mb-2" placeholder="Your Name" required>
                    <input name="name2" class="form-control mb-2" placeholder="Partner Name" required>
                    <button class="btn btn-danger w-100">Check Compatibility</button>
                </form>
            </div>
        </div>

    </div>

    <?php if ($result): ?>
        <div class="card mt-4 p-4 text-dark shadow">
            <h5>✨ Result:</h5>
            <p><?= $result; ?></p>
        </div>
    <?php endif; ?>

</div>
...
</div> <!-- end of container -->

<!-- Footer -->

<footer class="text-center text-white py-3" 
        style="position: fixed; bottom: 0; width: 100%; 
               background: linear-gradient(to right, #ff758c, #ff7eb3);
               box-shadow: 0 -2px 10px rgba(0,0,0,0.3); font-family: 'Cursive', sans-serif;">
    <p class="mb-0">💖 Made with love by JMMITCMAGNO © 2026 💖</p>
</footer>

</body>
</html>
