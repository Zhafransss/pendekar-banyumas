<div
    class="srq-question rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default dark:border-strokedark dark:bg-boxdark">
    {{-- Heading --}}
    <div class="mt-4 flex items-center justify-between">
        <div>
            <span class="text-lg font-regular text-dark dark:text-primary">Pertanyaan {{ $data->urutan }}</span>
        </div>
        <div class="flex gap-2">
            <button>
                <a
                    class="flex justify-center items-center gap-1 text-sm font-medium w-[80px] h-[30px] cursor-pointer rounded-[30px] bg-[#D9D9D9] text-dark duration-300 ease-linear">
                    <img src="{{ asset('assets/icon/icon-save.png') }}" alt="simpan" class="w-4 h-4">
                    <span>Simpan</span>
                </a>
            </button>
        </div>
    </div>
    {{-- Question --}}
    <div class="mt-4">
        <textarea name="pertanyaan" id="" rows="3" class="w-full overflow-auto dark:bg-transparent">{{ $data->pertanyaan }}</textarea>
    </div>
</div>