<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

@include('includes.messages')

    @if(count($posts) > 0)
        <table>
        <tr>
            <th>Post #</th>
            <th>Title</th>
            <th>Edit</th>
        </tr>        
         @foreach($posts as $post)
          <tr>
            <td>{{ $loop->iteration  }} </td>
            <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>            
            <td><a href="/posts/{{$post->id}}/edit"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
          </tr>         
        @endforeach
        </table>        
    @else
        <p>you don't have any posts.</p>
    @endif

    </x-slot>

    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>-->
</x-app-layout>
