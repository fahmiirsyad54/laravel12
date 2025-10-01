<x-layout>
  <x-slot:judul>{{ $title }}</x-slot:judul>
   <div class="p-6">
  <!-- Header -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold text-gray-800">Classroom List</h2>
  </div>

  <!-- Table -->
  <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="bg-gray-900 text-gray-100 text-left">
          <th class="px-6 py-3">#</th>
          <th class="px-6 py-3">Room Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($classrooms as $classroom)
        <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
          <td class="px-6 py-4">{{$loop->iteration}}</td>
          <td class="px-6 py-4">{{ $classroom['name'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</x-layout>
