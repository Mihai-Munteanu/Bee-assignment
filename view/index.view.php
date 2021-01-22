<?php
    include ('view/header.php');
    require 'services/characters.php';
    require 'services/create.team.php';
?>

<div class="container mx-auto bg-blue-100 pb-20">
    <div class="flex items-center justify-center mb-5">
        <div class="container mx-24 rounded shadow-lg">
            <div class="px-12">
                <div class="text-center">
                    <h1 class="font-normal text-2xl text-grey-darkest leading-loose my-3 w-full">
                        Insert your name
                    </h1>

                    <div class="w-full text-center">
                        <form action="/fight" method="POST">
                            <div class="max-w-sm mx-auto p-1 pr-0 flex items-center">
                                <input name="name" type="text" placeholder="insert your name" class="px-20 flex-1 appearance-none rounded shadow mb-5 px- py-4 text-grey-dark mr-2 focus:outline-none" required>

                                <button type="submit" class="mb-5 px-20 ml-5 py-1 bg-indigo-500 text-white font-bold border rounded-lg hover:bg-white hover:border-indigo-500 hover:text-black">
                                    Get started
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex flex-col sm:flex-row justify-center mb-6 sm:mb-0">

            <div class="sm:flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg rounded-tr-none bg-white mt-4 flex flex-col">
                <div class="p-8 text-3xl font-bold text-center">
                    Worker Bees
                </div>

                <div class=" border-0 border-grey-light border-t border-solid text-sm">
                    <table class="container mx-auto">
                        <thead class="justify-between">
                            <tr class="bg-gray-800">
                                <th class="px-16 py-2">
                                    <span class="text-gray-300">Name</span>
                                </th>
                                <th class="px-16 py-2">
                                    <span class="text-gray-300">HP</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-gray-200">
                            <?php foreach ($beeTeam->characters as $character) { ?>
                                <?php if ($character->type == "Worker") {?>

                                    <tr class="bg-white border-2 border-gray-200 text-center">
                                        <td class="py-2">
                                            <span class="text-center ml-2 font-semibold"> <?= $character->name ?></span>
                                        </td>
                                        <td>
                                            <span class="text-center ml-2 font-semibold"> <?= $character->life ?></span>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg bg-white mt-4 sm:-mt-4 z-30 flex flex-col">
                <div class="w-full p-8 text-3xl font-bold text-center">
                    Queen Bee
                </div>

                <div class="w-full border-0 border-grey-light border-t border-solid text-sm">
                    <table class="container mx-auto">
                        <thead class="justify-between">
                            <tr class="bg-gray-800">
                                <th class="px-16 py-2">
                                    <span class="text-gray-300">Name</span>
                                </th>
                                <th class="px-16 py-2">
                                    <span class="text-gray-300">HP</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-gray-200">
                            <?php foreach ($beeTeam->characters as $character) { ?>
                                <?php if ($character->type == "Queen") {?>

                                    <tr class="bg-white border-2 border-gray-200 text-center">
                                        <td class="py-2">
                                            <span class="text-center ml-2 font-semibold"> <?= $character->name ?></span>
                                        </td>
                                        <td>
                                            <span class="text-center ml-2 font-semibold"> <?= $character->life ?></span>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg rounded-tl-none bg-white mt-4 flex flex-col">
                <div class="p-8 text-3xl font-bold text-center">
                    Drone Bees
                </div>

                <div class="border-0 border-grey-light border-t border-solid text-sm">
                    <table class="container mx-auto">
                        <thead class="justify-between">
                            <tr class="bg-gray-800">
                                <th class="px-16 py-2">
                                    <span class="text-gray-300">Name</span>
                                </th>
                                <th class="px-16 py-2">
                                    <span class="text-gray-300">HP</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-gray-200">
                            <?php foreach ($beeTeam->characters as $character) { ?>
                                <?php if ($character->type == "Drone") {?>

                                    <tr class="bg-white border-2 border-gray-200 text-center">
                                        <td class="py-2">
                                            <span class="text-center ml-2 font-semibold"> <?= $character->name ?></span>
                                        </td>
                                        <td>
                                            <span class="text-center ml-2 font-semibold"> <?= $character->life ?></span>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
