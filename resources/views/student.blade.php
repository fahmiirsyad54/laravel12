<x-layout>
  <x-slot:judul>{{ $title }}</x-slot:judul>
   <div class="p-6">
  <!-- Header -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold text-gray-800">Daftar Siswa</h2>
  </div>

  <!-- Table -->
  <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="bg-gray-900 text-gray-100 text-left">
          <th class="px-6 py-3">#</th>
          <th class="px-6 py-3">Nama</th>
          <th class="px-6 py-3">Class</th>
          <th class="px-6 py-3">Email</th>
          <th class="px-6 py-3">Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
          <td class="px-6 py-4">{{$loop->iteration}}</td>
          <td class="px-6 py-4">{{ $student->name }}</td>
          {{-- <td class="px-6 py-4">{{ $student['grade'] }}</td> --}}
          <td class="px-6 py-4">{{ $student->classroom->name }}</td>
          <td class="px-6 py-4">{{ $student['email'] }}</td>
          <td class="px-6 py-4">{{ $student['address'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</x-layout>
