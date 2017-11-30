$table->string('country_code');
$table->string('phone_number');
$table->string('authy_status')->default('unverified');
$table->string('authy_id')->nullable();
