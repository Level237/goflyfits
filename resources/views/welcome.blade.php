<!-- Email -->
<div class="mb-2 form-control-bg-light">
    <label class="form-label">Quel est votre numéro de téléphone? *</label>
    <input type="text" name="phone_number" class="form-control">
    @error('phone_number')
    <div style="color:#c70609">{{ $message }}</div>
    @enderror
</div>

<!-- Message -->
<div class="mb-4 form-control-bg-light">
    <label class="form-label">Quel est votre ville de résidence? *</label>
    <select  class="form-control" name="town" id="">
        @foreach ($towns as $town)
            <option value="{{ $town->id }}">{{ $town->town_name }}</option>
        @endforeach

    </select>

</div>
@error('town')
                    <div style="color:#c70609">{{ $message }}</div>
                    @enderror


                    return [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
