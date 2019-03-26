package sample;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.text.Text;

import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;



public class Controller implements Initializable  {

    @FXML private Text actiontarget;
    @FXML private TextField userName;
    @FXML private PasswordField passwordField;
    public String user;
    public String pass;

    @FXML
    protected void handleSubmitButtonAction(ActionEvent event) throws SQLException, ClassNotFoundException {
        user = userName.getText();
        pass = passwordField.getText();
        Main m = new Main();
        m.myDb(user,pass);
        actiontarget.setText("Sign in button pressed");

    }

    public void handleUserName(ActionEvent actionEvent) {


    }

    public void hendelPassword(ActionEvent actionEvent) {
    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {

    }
}
