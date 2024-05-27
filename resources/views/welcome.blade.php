@include('base')
<!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet"/>
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<x-bladewind::button
    show_close_icon="true"
    onclick="showModal('tnc-agreement')">
    Basic modal
</x-bladewind::button>

<x-bladewind::button
    onclick="showModal('tnc-agreement-titled')">
    Basic modal with a title
</x-bladewind::button>
<x-bladewind::modal
    type="info"
    title="General Info"
    name="info">
    We really think you should buy some Bitcoin
    despite it's ups and dowms. What sayeth thou?
</x-bladewind::modal>
<x-bladewind::modal
    type="info"
    Title="Quest"
    name="tnc-agreement">
    Please agree to the terms and conditions of
    the agreement before proceeding.
</x-bladewind::modal>

<x-bladewind::modal
    name="tnc-agreement-titled"
    title="Agree or Disagree">
    Please agree to the terms and conditions of
    the agreement before proceeding.
</x-bladewind::modal>
<x-bladewind::timeline-group
    position="right"
    anchor="big">

    <x-bladewind::timeline
        date="just now"
        content="database server restarted"
        align_left="true"/>

    <x-bladewind::timeline
        date="30 minutes ago">
        <x-slot:content>
            <button onclick="showModal('info')">2 endpoints</button>
            are failing on
            bladewindui-data EC2 bucket. You may want to login
            and check the logs
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline
        date="1 hour ago"
        align_left="true">
        <x-slot:content>
            There have been 200 failed log in attempts from
            <a>mike@bladewindui.com</a>.
            Possibly a DDos attack attempt.
            Secure the server.
        </x-slot:content>
    </x-bladewind::timeline>

    <x-bladewind::timeline
        date="Yesterday"
        content="Data recovery completed with 2 errors"/>

</x-bladewind::timeline-group>
@include('partial.footer')

