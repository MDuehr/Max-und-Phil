package de.mt.wme.infbox_android_g10;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import de.mt.wme.infbox_android_gxx.R;

public class LoginActivity extends Activity {
	
	private TextView wrongemail;
	private TextView wrongPassword;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		
		setContentView(R.layout.activity_login);
		wrongPassword = (TextView) findViewById(R.id.textview_password);
		wrongemail = (TextView) findViewById(R.id.textview_email);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.login, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_about) {
			Intent intent = new Intent(this,InfoActivity.class);
			startActivity(intent);
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
	
	public void onButtonClicked(View v)
	{
		switch(v.getId())
		{
		case R.id.button_register:
			Intent registerIntent = new Intent(this,RegisterActivity.class);
			startActivity(registerIntent);
			break;
		case R.id.button_login:
			EditText emailInput = (EditText) v.getRootView().findViewById(R.id.input_email);
			EditText passwordInput = (EditText) v.getRootView().findViewById(R.id.input_password);
			CharSequence emailIputText = emailInput.getText();
			CharSequence passwordInputText = passwordInput.getText();
			boolean emailCorrect = false;
			boolean passwordCorrect = false;
			if(emailIputText != null)
			{
				if(validEmail(emailIputText))
				{
					emailCorrect = true;
					wrongemail.setVisibility(View.GONE);
				} else {
					emailError();
					emailCorrect = false;
				}
			} else {
				emailError();
				emailCorrect = false;
			}
			
			if(passwordInputText != null)
			{
				if(validPassword(passwordInputText))
				{
					System.out.println("Eingabe: "+passwordInputText);
					passwordCorrect = true;
					wrongPassword.setVisibility(View.GONE);
				} else {
					passwordError();
				}
			} else {
				System.out.println("test");
				passwordError();
			}
			
			
			if(emailCorrect&&passwordCorrect)
			{
				Intent loginIntent = new Intent(this,ItemListActivity.class);
				startActivity(loginIntent);
			}
			
			break;
		}
	}
	
	private void emailError()
	{
		wrongemail.setVisibility(View.VISIBLE);
		wrongemail.setText(R.string.wrongemail);
	}
	
	private void passwordError()
	{
		wrongPassword.setVisibility(View.VISIBLE);
		wrongPassword.setText(R.string.emptypassword);
	}
	
	
	public boolean validEmail(CharSequence input)
	{
		if(TextUtils.isEmpty(input))
		{
			wrongemail.setText("");
			wrongemail.setVisibility(View.GONE);
			return false;
		} else
		{
			return android.util.Patterns.EMAIL_ADDRESS.matcher(input).matches();
		}
	}
	
	public boolean validPassword(CharSequence input)
	{
		if(input.length()>0)
		{
			return true;
		}
		return false;
	}
}
