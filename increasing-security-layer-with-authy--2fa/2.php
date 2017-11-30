public function register(Request $request)
{
      $this->validator($request->all())->validate();

      event(new Registered($user = $this->create($request->all())));

      $user->registerAuthy();
      $user->sendToken();

      session(['password_validated' => true, 'id' => $user->id]);

      return '/twofactor';
}
