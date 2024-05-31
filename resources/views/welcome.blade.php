@include('base')
<!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet"/>
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<!-- Quest Global Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at Quest Global"
    name="quest_global_modal"
    show_action_buttons="false">
    <p>
        <strong>Jul 2022 - Current</strong><br>
        Developed and maintained Laravel/Neo4jDB (NoSQL DB) project for social app, focusing on backend development.<br>
        Designed and implemented API endpoints to enable seamless communication between backend and frontend components.<br>
        Collaborated with frontend team to ensure smooth integration and data exchange between two systems.<br>
        Implemented user authentication and authorization mechanisms using JWT for enhanced security.<br>
        Optimized database schema in Neo4jDB to improve data retrieval performance and reduce query response time.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used SVN, Git, composer on daily basis.<br>
        Worked with HTML, Javascript, CSS, SASS on daily basis.<br>
        Worked with Reactjs.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('quest_global_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- SC Arnia SRL Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at SC Arnia SRL"
    name="sc_arnia_srl_modal"
    show_action_buttons="false">
    <p>
        <strong>Jul 2021 - Jul 2022</strong><br>
        Led a team in the development of an AI-driven API system powered by Symfony 5 and API Framework.<br>
        Designed and developed the functionality for users to take pictures of clothing and receive suggested products
        from various shops.<br>
        Implemented API endpoints to facilitate seamless integration with a standalone frontend app and allow shops
        (e.g., Magento) to add new feeds for processing.<br>
        Successfully deployed the project on AWS, ensuring high availability and scalability.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used SVN, Git, composer on daily basis.<br>
        Worked with HTML, Javascript, CSS, SASS, LESS, AngularJs on daily basis.<br>
        Databases used: Mysql.<br>
        Framework used: Symfony 5.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('sc_arnia_srl_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- SC Oves Enterprize SRL Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at SC Oves Enterprize SRL"
    name="sc_oves_enterprize_srl_modal"
    show_action_buttons="false">
    <p>
        <strong>Jul 2020 - Jan 2021</strong><br>
        Joined an ongoing Symfony project catering to the automotive industry, enabling drivers to order food or parking
        from their car's console.<br>
        Developed API calls to interact with third-party APIs for ordering parking and food services and processed the
        results for display on Android and Voice projects.<br>
        Collaborated with the Android and Voice teams to ensure seamless communication between backend and frontend
        systems.<br>
        Assisted in testing and debugging to maintain a high-quality codebase.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used SVN, Git, composer on daily basis.<br>
        Databases used: Mysql and MongoDB.<br>
        Framework used: Symfony 5.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('sc_oves_enterprize_srl_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- TechSquad Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at TechSquad"
    name="techsquad_modal"
    show_action_buttons="false">
    <p>
        <strong>Jul 2018 - Jul 2020</strong><br>
        Collaborated with an external client, Alea Software, to integrate game providers with online casinos.<br>
        Worked on various codebases, including Symfony 2.8, Phalcon, and custom PHP projects.<br>
        Developed automatic and manual age validation features using a third-party API, ensuring compliance with legal
        requirements.<br>
        Emphasized writing optimized and efficient code due to the high traffic volume on the websites.<br>
        Developed and maintained an API to integrate new games with casinos and provide casinos with game control APIs
        for start/stop/spin actions and bet/win/lose transactions.<br>
        Utilized caching mechanisms (Symfony cache, Redis, and SQL cache) to enhance application performance.<br>
        Implemented some notifications using RabitMQ.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used SVN, Git, composer on daily basis.<br>
        Worked with HTML, Javascript, CSS on daily basis.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('techsquad_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- Resto-In Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at Resto-In"
    name="resto_in_modal"
    show_action_buttons="false">
    <p>
        <strong>Jul 2018 - Aug 2019</strong><br>
        Contributed to the development and maintenance of a food delivery service application/website built on Symfony
        2.5.<br>
        Developed efficient and performant API endpoints for seamless communication with the Android/iOS app, handling
        numerous requests from restaurants.<br>
        Externalized messages/notifications using the Mailchimp templating system for effective communication with
        users.<br>
        Ensured fast response times and low memory consumption due to a large number of restaurants enrolled in the
        platform.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used Git, composer.<br>
        Worked with HTML, Javascript, CSS, SASS, LESS on daily basis.<br>
        Databases used: Mysql.<br>
        Framework used: Symfony 3.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('resto_in_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- Intacct Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at Intacct"
    name="intacct_modal"
    show_action_buttons="false">
    <p>
        <strong>Jul 2016 - Jul 2018</strong><br>
        Worked on a custom PHP application for financial services catering to small companies in the USA.<br>
        Participated in a major migration project, transitioning the codebase from PHP 5.3 to PHP 7.0 to improve
        performance and security.<br>
        Collaborated with the team to rewrite functions, add annotations, and remove deprecated code during the
        migration.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used SVN, Git, composer.<br>
        Worked with HTML, Javascript, CSS, SASS, LESS on daily basis.<br>
        Databases used: Oracle.<br>
        Framework used: in house.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('intacct_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- COERA Modal -->
<x-bladewind::modal
    type="info"
    title="Senior PHP Developer at COERA"
    name="coera_modal"
    show_action_buttons="false">
    <p>
        <strong>Jun 2015 - Jul 2016</strong><br>
        Developed PHP-based web applications, involving both back-end and front-end development.<br>
        Worked on various projects, including Sim Only and Mobiel.nl, using Symfony 2 and Bootstrap for front-end
        development and custom PHP solutions for back-end development.<br>
        Used Drupal for a project.<br>
        Acted as the sole QA resource, performing testing and ensuring the quality of deliverables.<br>
        Maintained direct communication with clients to address their needs and provide support.<br>
        Used Jira, Confluence on daily basis.<br>
        Worked in Agile methodology.<br>
        Used Git, composer.<br>
        Worked with HTML, Javascript, CSS, SASS, LESS on daily basis.<br>
        Databases used: Mysql.<br>
        Framework used: Symfony 3.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('coera_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>

<!-- Tenaris Modal -->
<x-bladewind::modal
    type="info"
    title="IT Analyst at Tenaris"
    name="tenaris_modal"
    show_action_buttons="false">
    <p>
        <strong>Jan 2008 - Jan 2012</strong><br>
        Maintained and updated custom .NET applications controlling factory production.<br>
        Developed various projects, including access control software and RFID tag reader for inside trucks, using
        Intermec.<br>
        Created internal shop application for Tenaris blue-collar employees, allowing them to use their access card to
        purchase products.<br>
        Databases used: Oracle.
    </p>
    <x-slot:footer>
        <x-bladewind::button onclick="hideModal('tenaris_modal')">OK</x-bladewind::button>
    </x-slot:footer>
</x-bladewind::modal>
<x-bladewind::timeline-group position="right" anchor="big">

    <x-bladewind::timeline date="Jul 2022 - Current">
        <x-slot:content>
            <a onclick="showModal('quest_global_modal')">Quest Global</a>
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline date="Jul 2021 - Jul 2022">
        <x-slot:content>
            <a onclick="showModal('sc_arnia_srl_modal')">SC Arnia SRL</a>
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline date="Jul 2020 - Jan 2021">
        <x-slot:content>
            <a onclick="showModal('sc_oves_enterprize_srl_modal')">SC Oves Enterprize SRL</a>
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline date="Jul 2019 - Jul 2020">
        <x-slot:content>
            <a onclick="showModal('techsquad_modal')">TechSquad</a>
        </x-slot:content>
    </x-bladewind::timeline>
    <x-bladewind::timeline date="Jul 2018 - Aug 2019">
        <x-slot:content>
            <a onclick="showModal('resto_in_modal')">Resto-In</a>
        </x-slot:content>
    </x-bladewind::timeline>


    <x-bladewind::timeline date="Jul 2016 - Jul 2018">
        <x-slot:content>
            <a onclick="showModal('intacct_modal')">Intacct</a>
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline date="Jun 2015 - Jul 2016">
        <x-slot:content>
            <a onclick="showModal('coera_modal')">Coera</a>
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline date="Jan 2008 - Jan 2012">
        <x-slot:content>
            <a onclick="showModal('tenaris_modal')">Tenaris</a>
        </x-slot:content>
    </x-bladewind::timeline>

</x-bladewind::timeline-group>

@include('partial.footer')

