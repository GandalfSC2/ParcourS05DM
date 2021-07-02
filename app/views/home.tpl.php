<table>
<?php foreach($characterList as $listChar): ?>
<tr>
<? $router->generate (
    'character-page',
    [
        'name' => $listChar->getName()
    ]
    ) ?>
</tr>
<?php endforeach?>
</table>