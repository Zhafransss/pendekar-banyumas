@foreach ($data as $item)
    <div
        class="sdq-question rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark">
        {{-- Heading --}}
        <div class="mt-4 flex items-center justify-between">
            <div>
                <span class="text-lg font-regular text-dark dark:text-primary">Pertanyaan
                    {{ $loop->iteration }}</span>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('viewSDQ', $item->id_sdq) }}"
                    class="edit-sdq flex justify-center items-center gap-1 text-sm font-medium w-[80px] h-[30px] cursor-pointer rounded-[30px] bg-[#D9D9D9] text-dark duration-300 ease-linear">
                    <img src="{{ asset('assets/icon/icon-edit.png') }}" alt="edit" class="w-4 h-4">
                    <span>Edit</span>
                </a>
                
                <a href="{{ route('deleteSDQ', $item->id_sdq) }}"
                    class="delete-confirm flex justify-center items-center gap-1 text-sm font-medium w-[80px] h-[30px] cursor-pointer rounded-[30px] bg-[#D9D9D9] text-dark duration-300 ease-linear">
                    <img src="{{ asset('assets/icon/icon-delete.png') }}" alt="hapus" class="w-4 h-4">
                    <span>Hapus</span>
                </a>
            </div>
        </div>
        {{-- Question --}}
        <div class="mt-4">
            <textarea name="pertanyaan" id="" rows="3"
                class="question w-full border-none overflow-auto dark:bg-transparent" disabled>{{ $item->pertanyaan }}</textarea>
        </div>
    </div>
@endforeach