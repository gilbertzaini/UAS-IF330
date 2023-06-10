<x-guest-layout>
    <form method="POST" action="{{ route('appointment.store') }}">
        @csrf

        <input type="hidden" name="id_dokter" value="{{ $doctor->id }}">

        {{-- <div>
            <x-input-label for="doctorName" :value="__('Dokter')" />
            <x-text-input type="text" class="block mt-1 w-full" name="doctorName" value="{{$doctor->nama}}" disabled/>
            <x-input-error :messages="$errors->get('doctorName')" class="mt-2" />
        </div> --}}
        <div class="block mt-1 w-full">
            {{$doctor->nama}}
        </div>

        <div class="mt-4">
            <x-input-label for="id_jadwal" :value="__('Pilih Jadwal')"/>
            <select style="height: 2.8rem;" name="id_jadwal" id="idJadwal" class="mt-1 block w-full text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                @foreach($doctor->jadwal as $jadwal)
                    <option value={{$jadwal->id}}>{{$jadwal->jadwalPraktik}}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <x-input-label for="keluhan" :value="__('Keluhan')"/>
            <textarea name="keluhan" class="mt-1 block w-full text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"></textarea> 
            <x-input-error :messages="$errors->get('keluhan')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-5">
            <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

