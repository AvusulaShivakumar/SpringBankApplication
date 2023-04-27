package com.shiva;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import org.springframework.ui.ModelMap;
@Repository
public interface BankRepo extends CrudRepository<BankDetails, String> {

	

}
