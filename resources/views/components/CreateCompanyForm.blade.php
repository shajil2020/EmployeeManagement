<!-- resources/views/components/CreateCompanyForm.blade.php -->

<form wire:submit.prevent="create">
    <!-- Use Livewire directives to bind properties -->
    <input wire:model="name" type="text" placeholder="Name" required>
    <input wire:model="email" type="email" placeholder="Email">
    <!-- Add logo and website inputs as needed -->

    <button type="submit">Create Company</button>
</form>
