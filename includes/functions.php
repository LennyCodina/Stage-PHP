<?php
function displayAuthor(string $authorEmail, array $users): string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }
    return 'Auteur inconnu';
}
function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }


    return $isEnabled;
}


function getRecipes(array $recipes): array
{
    $valid_recipes = [];
    foreach ($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $valid_recipes[] = $recipe;
        }
    }
    return $valid_recipes;
}

function verifyForm($data):array{
    $err = [];
    if(!isset($data['email'])) array_push($err, 1);
    if(!isset($data['message'])) array_push($err, 3);
    if(!filter_var($data['email'])) array_push($err, 0);
    if(!trim($data['message'])) array_push($err, 2);

    return $err;
}