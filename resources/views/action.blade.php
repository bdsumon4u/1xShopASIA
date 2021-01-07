<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit '.ucfirst($type)) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form class="md:max-w-xl mx-auto" :action="route($route, $model->id)" method="POST">
                <x-hidden name="referer" :value="request()->headers->get('referer')" />
                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <x-label class="text-redish font-bold" name="player_id" />
                        </h2>
                        <x-input name="player_id" :value="$model->player_id" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                        <x-error name="player_id" />
                    </div>
                </div>

                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 flex flex-col bg-white shadow-md relative rounded-md mt-5">
                            <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                <x-label class="text-redish font-bold" for="currency">Select Currency</x-label>
                            </h2>
                            <select name="currency" id="currency" class="tail-select mt-2 w-64">
                                @foreach(explode(',', setting('currencies')) as $currency)
                                    <option value="{{ $currency }}" @if ($currency == $model->currency) selected @endif>{{ $currency }}</option>
                                @endforeach
                            </select>
                            <x-error name="currency" />
                        </div>
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="flex">
                            <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                                <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                    <x-label class="text-redish font-bold" name="amount" />
                                </h2>
                                <x-input name="amount" :value="$model->amount" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                                <x-error name="amount" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md mt-5">
                            <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                <x-label class="text-redish font-bold" for="payment-method">Payment Method</x-label>
                            </h2>
                            @inject('payment', 'App\Http\Livewire\Admin\PaymentSetting')
                            <select name="payment_method" id="payment-method" class="tail-select mt-2 w-64">
                                @foreach($payment->toArr() as $name => $number)
                                    <option @if($model->getTable() != 'withdraws') data-description="{{ $number }}" @endif value="{{ $name }}" @if($name == $model->payment_method) selected @endif>{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md mt-5">
                            <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                <x-label class="text-redish font-bold" for="status">Change Status</x-label>
                            </h2>
                            <select name="status" id="status" class="tail-select mt-2 w-64">
                                <option value="pending" @if($model->status == 'pending') selected @endif>Pending</option>
                                <option value="completed" @if($model->status == 'completed') selected @endif>Completed</option>
                                <option value="returned" @if($model->status == 'returned') selected @endif>Returned</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <x-label class="text-redish font-bold" for="email" />
                        </h2>
                        <x-input name="email" :value="$model->email" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                        <x-error name="email" />
                    </div>
                </div>

                <x-jet-button class="w-full justify-center mt-6 py-3">
                    Submit
                </x-jet-button>
            </x-form>
        </div>
    </div>
</x-app-layout>

