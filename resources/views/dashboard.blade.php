<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

<div class="container">

    <table id="usuarios" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Author</th>
            <th>Realease date</th>
            <th>Publish date</th>
        </tr>
        </thead>
    </table>

</div>

<!-- Script -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#usuarios').DataTable({
            "ajax": "{{route('get.books')}}",
            "columns":[
                {data: 'id'},
                {data: 'title'},
                {data: 'author'},
                {data: 'category'},
                {data: 'realease_date'},
                {data: 'publish_date'},
            ]
        } );
    });
</script>
