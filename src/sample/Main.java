package sample;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
public class Main extends Application {

    public void myDb(String value, String valuep) throws ClassNotFoundException, SQLException {
        Class.forName("com.mysql.jdbc.Driver");
        String connectionUrl = "jdbc:mysql://localhost:3306/people?useUnicode=true&characterEncoding=UTF-8&user=root&password=";
        Connection conn = DriverManager.getConnection(connectionUrl);


        String quer = "INSERT INTO `project` (`NAME`,`PASSWORD`) VALUES('" + value + "','"+valuep+"');";
        conn.prepareStatement(quer).execute();


    }
    @Override
    public void start(Stage primaryStage) throws Exception{
        Parent root = FXMLLoader.load(getClass().getResource("sample.fxml"));
        primaryStage.setTitle("Hello World");
        primaryStage.setScene(new Scene(root, 300, 275));
        primaryStage.show();
    }


    public static void main(String[] args){

        launch(args);
    }
}
