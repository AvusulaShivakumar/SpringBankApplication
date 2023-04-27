package com.shiva;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class BankService implements BankServiseint {

	@Autowired
	private BankRepo repo;

	@Override
	public BankDetails saveBankDetails(BankDetails b) {
		BankDetails b1=repo.save(b);
		return b1;
	}


	
}
