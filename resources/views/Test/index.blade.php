<style>
    .alert-danger{
        background-color:red;
        width:200px;
        padding :10px;
        border-radius: 5px;
        color:white;
    }
    .alert-success{
        background-color:green;
        width:200px;
        padding :10px;
        border-radius: 5px;
        color:white;
    }
    .border-red{
        border : 1px solid red;
    }
    .bg-red{
        background-color :red;
    }
    .bg-blue{
        background-color : blue;
    }
    .p-4{
        padding:4px;
    }
    .btn{
        margin-top : 5px;
        border-radius :10px;
        font-size :15px;
        padding : 5px 10px;
        color :white;   
    }
</style>
<x-test.alert type="success" class="border-red" text-message="hello world" >
    <x-slot:title>
        {{ $component->formatAlert('server Error') }}
    </x-slot:title>
</x-test.alert>
<x-test.inputs.button class="btn"></x-test.inputs.button>

<x-test.menu color="red">
    <x-test.menu.item>Item - 1</x-test.menu.item>
    <x-test.menu.item>Item - 2</x-test.menu.item>
    <x-test.menu.item>Item - 3</x-test.menu.item>
    <x-test.menu.item>Item - 4</x-test.menu.item>
</x-test.menu>