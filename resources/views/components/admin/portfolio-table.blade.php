<div class="relative mt-4 ">
    <div class="overflow-y-auto max-h-[500px] rounded-2xl border">
        <table class="w-full text-sm text-gray-500">
            <thead class="text-xs text-black capitalize text-start">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Thumbnail
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Demo Link
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolio as $portfolios)
                    {{-- Change Category Color --}}
                    @php
                        switch ($portfolios->category_label) {
                            case 'Web Aplikasi':
                                $validate_label = 'bg-blue-500/80 border-blue-500/80';
                                break;
                            case 'Aplikasi Mobile':
                                $validate_label = 'bg-green-500/80 border-green-500/80';
                                break;
                            case 'Websites':
                                $validate_label = 'bg-purple-500/80 border-purple-500';
                                break;
                            default:
                                $validate_label = 'bg-gray-500/80 border-gray-500';
                                break;
                        }
                    @endphp
                    {{-- End Change Category Color --}}
                    <tr class="bg-white border-b border-gray-200" id="portfolio-row" data-category="{{ $portfolios->category_label }}">
                        <td class="px-6 py-1 text-center border">{{ $portfolios->id }}</td>
                        <td class="px-6 py-1 border">
                            <img alt="{{ $portfolios->title }}" class="object-cover p-3 rounded-full"
                                style="height:80px; width:80px;" src="{{ asset('storage/' . $portfolios->image) }}" />
                        </td>
                        <td class="px-6 py-1 border">{{ $portfolios->title }}</td>
                        <td class="px-6 py-1 border">{{ Str::limit($portfolios->description, 80) }}</td>
                        <td class="px-3 py-1 border"><span
                                class="px-3 py-1 text-white border-2 rounded-full {{ $validate_label }}">{{ $portfolios->category_label }}</span>
                        </td>
                        <td class="px-6 py-1 border">{{ $portfolios->demo_url }}</td>
                        <td class="px-6 py-1 border">{{ $portfolios->demo_username }}</td>
                        <td class="px-6 py-1 border">{{ $portfolios->demo_password }}</td>
                        <td class="px-6 py-1 border">
                            <div class="flex flex-row gap-2">
                                <a href="{{ route('portfolio.edit', $portfolios->id) }}"
                                    class="w-full px-2 py-1 font-bold text-center text-blue-500 rounded text-md hover:text-blue-600 hover:no-underline">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('portfolio.destroy', $portfolios->id) }}" method="POST"
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
