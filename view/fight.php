<?php
    include('view/header.php')
?>


<div class="container mx-auto bg-blue-100">
    <div class="flex items-center justify-center mb-5">
        <div class="container mx-24 rounded shadow-lg">
            <div class="px-12">
                <div class="text-center">
                    <h1 class="font-normal text-3xl text-grey-darkest leading-loose my-3 w-full">
                        <?php
                            require 'services/require.form.php';
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="text-center">
            <?php
                require 'Controller/game.php';
                require 'services/characters.php';
                require 'services/create.team.php';
                require 'services/start.game.php';
            ?>
        </div>
    </div>

    <div>
        <div class="container mx-auto">
            <div class="col-span-2 text-center">
                <button id="fight" type="" action="" class="mt-2 py-3 px-20 bg-indigo-500 text-white font-bold border rounded-lg hover:bg-white hover:border-indigo-500 hover:text-black">
                    Hit
                </button>
            </div>
        </div>

        <form action="/" method="POST">
            <div class="container mx-auto">
                <div class="col-span-2 text-center">
                    <button id ="myBtn" type="" action="" class="my-3 py-3 px-12 bg-indigo-500 text-white font-bold border rounded-lg hover:bg-white hover:border-indigo-500 hover:text-black">
                    New Game
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('fight').addEventListener("click",function(){
        var listItems = document.getElementsByClassName("round");

        for (var i=0; i < listItems.length-1; i++)
        {
            if(listItems[i].style.display == "")
            {
                listItems[i].style.display = "none";
                listItems[i+1].style.display = "";
                break;
            }
        }
    });
</script>
