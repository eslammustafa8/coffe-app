<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    {{-- nav section --}}
    @include('theme.partials.nav')
    {{-- main content --}}
    @yield('content')
    {{-- footer --}}
    @include('theme.partials.footer')
    {{-- laoder --}}
    @include('theme.partials.loader')
    {{-- scripts --}}
    @include('theme.partials.scripts')

    <script>

        function confirmDelete(id) {
            let choice = confirm("Are you sure you want to delete this item?");
            if (choice) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }

    </script>

</body>