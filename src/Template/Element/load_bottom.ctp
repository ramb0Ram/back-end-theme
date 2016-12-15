<?=
$this->Html->script([
    '/libs/jquery/dist/jquery.min',
    '/libs/bootstrap/dist/js/bootstrap.min',
    'map'
]);
?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= Cake\Core\Configure::read('Project.googleMapsKeyApi'); ?>&callback=initMap"async defer></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->