<!-- resources/views/components/EditCompanyForm.blade.php -->

<form wire:submit.prevent="update">
    <input wire:model="name" type="text" placeholder="Name" required>
    <input wire:model="email" type="email" placeholder="Email">
    <!-- Add logo and website inputs as needed -->

    <button type="submit">Update Company</button>
</form>
