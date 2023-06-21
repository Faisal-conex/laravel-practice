<div>
    <x-white-spacer />

    <h1
        style="display: flex; justify-content: space-between; background-color : rgb(143, 97, 128); padding : 3rem; margin-bottom : 3rem">
        @if (isset($pageName))
            Footer component for {{ $pageName }}
        @else
            Footer
        @endif
    </h1>
</div>
