<?php
if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = "home";
}

switch($view) {

    case "capacitaciones":
        $title = "Capacitaciones";
        $description = "Capacitamos a tu personal y a cualquier persona que desee tener conocimientos sólidos sobre tecnologías, herramientas y metodologías más utilizadas en la actualidad.";
    break;
    case "talleres":
        $title = "Talleres";
        $description = "Talleres de creación de aplicaciones web completas con consumo de API's y aplicaciones Híbridas.";
    break;
    case "consultorias":
        $title = "Consultorias";
        $description = "Te ayudamos a tomar la mejor decisión para tu proyecto e ideas de software.
        Contamos con una amplia experiencia en la creación de software, más de 15 años, seguro podemos resolver tus dudas, orientarte para que puedas lograr tus objetivos, ayudándote a construir el software a la medida que requieras desarrollar, a través de tu propio equipo de desarrollo, por ti mismo o por una empresa Outsourcing.";
    break;
    case "outsourcing":
        $title = "Outsourcing";
        $description = "Te proporcionamos un equipo de profesionales especializado y capacitado en  desarrollo ágil mediante la metodología Scrum.
        Incluimos el personal siendo a tu consideración el número de elementos, el cuál garantizará que los tiempos y costos de desarrollo serán muy bajos y con resultados de alta calidad.";
    break;
    case "diseno-web-y-movil":
        $title = "Diseño Web y Móvil";
        $description = "Déjanos el diseño web o móvil de tu próximo software a nosotros, a través de los siguientes pasos lograremos proporcionarte una gran ventaja al diseñar un prototipo antes de construir el modelo y al finalizar te entregamos ya maquetado todo para que solo añadas la funcionalidad.";
    break;
    case "hosting-y-dominios":
        $title = "Venta y Administración de Hosting y Dominios";
        $description = "Servicio de venta y manejo de renta de hosting.Configuración de servidores dedicados, Configuración de servidores Apache con Linux, Configuración de servidores para hospedar aplicaciones Node con Digital Ocean. Administración, renta y sugerencias de dominios.";
    break;
    case "seo":
        $title = "Seo (Search Engine Optimization)";
        $description = "Se aplican en un sitio web un conjunto de técnicas diseñadas específicamente para lograr la indexación del mayor número de palabras claves posibles en los buscadores más populares como Google y Bing para lograr colocar un sitio web de manera orgánica en los primeros lugares de resultados de búsquedas.";
    break;
    case "capacitaciones":
        $title = "Capacitaciones";
        $description = "Capacitamos a tu personal y a cualquier persona que desee tener conocimientos sólidos sobre tecnologías, herramientas y metodologías más utilizadas en la actualidad.";
    break;
    case "software-a-la-medida":
        $title = "Software a la Medida";
        $description = "Creamos sitios web que sean los más adecuados para cubrir tus necesidades, también te ayudamos a ubicar cual es la solución perfecta para tu empresa o idea.";
    break;
    case "oferta-laboral-y-becarios":
        $title = "Oferta Laboral";
        $description = "¡Te estamos buscando! Tenemos vacantes, labora con Software Insights cubriendo alguna vacante como puede ser Desarrollador Front-end, Desarrollador Back-end, Tester, Project Manager. Realiza tus prácticas profesionales, servicio social o residencias, obten experiencia real, curriculum y lo más invaluable es la práctica trabajando en un ambiente real y productivo.";
    break;
    case "home":
        $title = "Desarrollo de Software en Ciudad Guzmán";
        $description = "Creamos sitios web que sean los más adecuados para cubrir tus necesidades, también te ayudamos a ubicar cual es la solución perfecta para tu empresa o idea.";
    break;
    case "ux-design":
        $title = "Curso Desarrollo de Productos Digitales - UX Design UI Design";
        $description = "UX Design (User Experience Design) o “Diseño de Experiencia de Usuario” es una filosofía de diseño que tiene por objetivo la creación de productos que resuelvan necesidades concretas de sus usuarios finales, consiguiendo la mayor satisfacción y mejor experiencia de uso posible con el mínimo esfuerzo.";
    break;
    case "curso-desarrollador-de-software-full-stack":
        $title = "Aprende a desarrollar software del lado del back-end y front-end.";
        $description = "Al finalizar el curso, tendras los conocimientos necesarios para obtener un empleo como desarrollador Full Stack.";
    break;
    case "curso-principios-de-programacion-web":
        $title = "Curso dedicado a todos aquellos que deseen obtener conocimientos básicos sobre paginas web.";
        $description = "Al finalizar el curso, tendras los conocimientos necesarios para obtener un empleo como desarrollador web.";
    break;
    case "soporte-tecnico":
    $title = "Soporte Técnico, Mantenimiento Preventivo y Correctivo de Equipo de Cómputo en Ciudad Guzmán.";
    $description = "Soporte Técnico, Mantenimiento Preventivo y Correctivo de Equipo de Cómputo en Ciudad Guzmán.";
break;
    default:
        $title = "Desarrollo de Software en Ciudad Guzmán";
        $description = "Creamos sitios web que sean los más adecuados para cubrir tus necesidades, también te ayudamos a ubicar cual es la solución perfecta para tu empresa o idea.";
    break;


}