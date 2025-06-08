<div class="relative mt-4 ">
    <div class="overflow-y-auto max-h-[500px] rounded-2xl border">
        <table class="w-full text-sm text-gray-500">
            <thead class="text-xs text-black capitalize text-start">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Nama Pekerjaan
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Divisi Pekerjaan
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Lokasi
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Deskripsi Pekerjaan
                    </th>

                    <th scope="col" class="px-6 py-3 border">
                        Deadline
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Persyaratan Pekerjaan
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karir as $karirs)
                    <tr class="bg-white border-b border-gray-200">
                        <td class="px-6 py-1 text-center border">{{ $karirs->id }}</td>
                        <td class="px-6 py-1 border">{{ $karirs->job_title }}</td>
                        <td class="px-6 py-1 border">{{ $karirs->job_division }}</td>
                        <td class="px-6 py-1 border">{{ $karirs->job_location }}</td>
                        <td class="px-6 py-1 border">{{ Str::limit($karirs->job_description, 30) }}</td>
                        <td class="px-6 py-1 border">{{ Carbon\Carbon::parse($karirs->job_deadline)->format('d F Y') }}</td>
                        <td class="px-6 py-1 border">
                            {{ Str::limit(is_array($karirs->job_requirements) ? implode(', ', $karirs->job_requirements) : $karirs->job_requirements, 30) }}
                        </td>
                        <td class="px-6 py-1 border">{{ $karirs->job_status }}</td>
                        <td class="px-6 py-1 border">
                            <div class="flex flex-row gap-2">
                                <a href="{{ route('karir.edit', $karirs->id) }}"
                                    class="w-full px-2 py-1 font-bold text-center text-blue-500 rounded text-md hover:text-blue-600 hover:no-underline">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('karir.destroy', $karirs->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus?')" class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full px-2 py-1 font-bold text-red-500 rounded text-md hover:text-red-600">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
