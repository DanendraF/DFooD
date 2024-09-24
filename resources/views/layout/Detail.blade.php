<!DOCTYPE html>
<html lang="en">
<head>
    <title>RECIPE</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/image/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/Dstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Rstyle.css') }}">

    
</head>
<body>

    @include('partials.navbar')

    <div class="container">
        <div class="image">
            <img src="{{ asset('assets/image/Food/fishCips.jpg') }}" alt="Fish and Chips">
        </div>

        <div class="content1">
            <h1 class="judul">FISH AND CHIPS</h1>
            <p class="desc">
                Fish and chips is a classic British dish made by battering and frying fish, served with crispy chips (fries) 
                and often accompanied by mushy peas. The combination of crispy exterior and tender interior, along with the salty 
                flavor of the chips, makes for a comforting and satisfying meal. Traditionally enjoyed with a side of tartar sauce 
                or malt vinegar, this dish offers a delightful contrast between the hot, crispy batter and the soft, flaky fish inside.
                The dish’s simple yet flavorful profile has made it a beloved staple in British cuisine, perfect for a hearty lunch or dinner. 
                Whether enjoyed at a local pub or made at home, fish and chips continues to be a favorite choice for those seeking a taste of classic comfort food.
            </p>
        </div>

    </div>

    <div class="container2">
        <div class="content2">
            <h1 class="judul">INGREDIENTS For the Fish</h1>
            <ul>
                <li>1 lb cod or haddock fillets</li>
                <li>1 cup all-purpose flour</li>
                <li>1 tsp baking powder</li>
                <li>1/2 tsp salt</li>
                <li>1/4 tsp black pepper</li>
                <li>1 egg, beaten</li>
                <li>1/2 cup cold water</li>
                <li>Vegetable oil for frying</li>
            </ul>

            <h2 class="judul">INGREDIENTS For the Chips</h2>
            <ul>
                <li>2 lb potatoes (suitable for frying - Maris Piper or King Edward are ideal)</li>
                <li>1/2 tsp salt</li>
                <li>1/4 tsp black pepper</li>
                <li>Vegetable oil for frying</li>
            </ul>

            <h3 class="judul">INGREDIENTS For the Mushy Peas</h3>
            <ul>
                <li>1 lb frozen peas</li>
                <li>1/2 cup chicken or vegetable stock</li>
                <li>1 tbsp butter</li>
                <li>1 tsp mint sauce</li>
            </ul>

            <h4 class="judul">Equipment</h4>
            <ul>
                <li>Large bowl</li>
                <li>2 medium bowls</li>
                <li>Deep fryer or large frying pan</li>
                <li>Colander</li>
                <li>Spatula</li>
                <li>Knife</li>
            </ul>
        </div>

        <div class="content3">
            <h1 class="judul">INSTRUCTION</h1>
            <ul>
                <li>Prepare the Fish
                    <ol>
                        <li>Dry the fish fillets thoroughly with kitchen paper.</li>
                        <li>In a large bowl, combine the flour, baking powder, salt, and pepper.</li>
                        <li>In a separate bowl, whisk together the beaten egg and cold water.</li>
                        <li>Dip each fish fillet into the egg mixture and then coat it thoroughly in the flour mixture.</li>
                    </ol>
                </li>
                
                <li>Prepare the Chips
                    <ol>
                        <li>Peel and chop the potatoes into thick chips, roughly 1/2 inch thick.</li>
                        <li>Rinse the chips under cold water to remove excess starch.</li>
                        <li>Dry the chips thoroughly with kitchen paper.</li>
                        <li>In a bowl, toss the chips with salt and pepper.</li>
                    </ol>
                </li>
                
                <li>Fry the Fish
                    <ol>
                        <li>Heat oil in a deep fryer or large frying pan over medium-high heat.</li>
                        <li>Carefully lower the fish fillets into the hot oil, a few at a time, ensuring not to overcrowd the pan.</li>
                        <li>Fry the fish for 3-4 minutes per side, or until golden brown and cooked through.</li>
                        <li>Remove the fish from the oil and drain on kitchen paper.</li>
                    </ol>
                </li>
                <li>Fry the Chips
                    <ol>
                        <li>Heat oil in a deep fryer or large frying pan over medium-high heat.</li>
                        <li>Carefully lower the chips into the hot oil, a few at a time, ensuring not to overcrowd the pan.</li>
                        <li>Fry the chips for 3-4 minutes per side, or until golden brown and cooked through.</li>
                        <li>Remove the chips from the oil and drain on kitchen paper.</li>
                    </ol>
                </li>
                <li>Prepare the Mushy Peas
                    <ol>
                        <li>In a saucepan, combine the frozen peas, chicken or vegetable stock, butter, and mint sauce.</li>
                        <li>Bring to a boil, then reduce heat and simmer for 5-7 minutes, or until the peas are tender.</li>
                        <li>Mash the peas with a fork until they are smooth and creamy.</li>
                    </ol>
                </li>
                <li>Serve
                    <ol>
                        <li>Place the fish, chips, and peas on individual plates.</li>
                        <li>Serve with your favorite toppings.</li>
                        <li>Serve immediately with a squeeze of lemon juice, if desired.</li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/Navbar.js') }}"></script>
</body>
</html>
