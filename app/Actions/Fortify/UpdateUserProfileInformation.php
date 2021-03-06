<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use App\Models\User;
use Storage;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required'],
            'gender' => ['required'],
            'profile' => ['required'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image', 'max:1024'],
            'profile_photo_path' => ['nullable', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

            $avatarPath = null;

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
            $image = $input['photo'];
            $path = Storage::disk('s3')->putFile('live-match', $image, 'public');
            $avatarPath = Storage::disk('s3')->url($path);
        }

        $user->forceFill([
            'name' => $input['name'],
            'age' => $input['age'],
            'gender' => $input['gender'],
            'profile' => $input['profile'],
            'email' => $input['email'],
            'profile_photo_path' => $avatarPath,
        ])->save();
    }
}
