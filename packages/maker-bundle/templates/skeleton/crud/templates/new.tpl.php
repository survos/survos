<?= $helper->getHeadPrintCode('New ' . $entity_class_name) ?>

{% block body %}
    <h1>Create new <?= $entity_class_name ?></h1>

    {{ include('<?= $route_name ?>/_form.html.twig') }}

{% endblock %}
